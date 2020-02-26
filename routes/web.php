<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Event;
use App\News;
use App\Notifications\NewsletterSubscriber;
use App\Page;
use App\Post;
use App\PostCategory;
use App\Subscriber;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

if (!session('lang')) Session::put('lang', 'en');

Route::get('fr', function () {
    Session::put('lang', 'fr');
    return redirect()->back();
});

Route::get('en', function () {
    Session::put('lang', 'en');
    return redirect()->back();
});

Route::get('', function () {
    $page = Page::where('route_name', 'welcome')->get()->first();
    return view('pages.welcome', compact('page'));
})->name('welcome');

Route::post('newsletter', function (Request $request) {
    $input = $request->all();
    foreach ($input as $key => $value) {
        $input[$key] = htmlspecialchars($value);
    }
    $subscriber = Subscriber::create($input);
    User::find(1)->notify(new NewsletterSubscriber($subscriber));
    return redirect()->back();
})->name('newsletter');

Route::prefix('pae-essamba')->name('pae-essamba.')->group(function () {
    Route::get('about', function () {
        $page = Page::where('route_name', 'pae-essamba.about')->get()->first();
        return view('pages.pae-essamba.about', compact('page'));
    })->name('about');
    Route::get('blog', function () {
        $page = Page::where('route_name', 'pae-essamba.blog')->get()->first();
        return view('pages.pae-essamba.blog', compact('page'));
    })->name('blog');
});

Route::prefix('posts')->name('posts.')->group(function () {
    Route::get('reports', function () {
        $posts = PostCategory::where('link', 'reports')->get()->first()->posts;
        return view('pages.posts.reports', compact('posts'));
    })->name('reports');

    Route::get('articles', function () {
        $posts = PostCategory::where('link', 'articles')->get()->first()->posts;
        return view('pages.posts.articles', compact('posts'));
    })->name('articles');

    Route::get('essamba-echo', function () {
        $posts = PostCategory::where('link', 'essamba-echo')->get()->first()->posts;
        return view('pages.posts.essamba-echo', compact('posts'));
    })->name('essamba-echo');

    Route::get('procedure', function () {
        $posts = PostCategory::where('link', 'procedure')->get()->first()->posts;
        return view('pages.posts.procedure', compact('posts'));
    })->name('procedure');

    Route::get('{post}', function ($id) {
        $post = Post::findOrFail($id);
        return view('pages.posts.show', compact('post'));
    });
});

Route::get('contact', function () {
    $page = Page::where('route_name', 'contact')->get()->first();
    return view('pages.contact', compact('page'));
})->name('contact');

Route::get('news', function () {
    $page = Page::where('route_name', 'news')->get()->first();
    return view('pages.news', compact('page'));
})->name('news');

Route::prefix('pae-events')->name('pae-events.')->group(function () {
    Route::get('luj', function () {
        $page = Page::where('route_name', 'pae-events.luj')->get()->first();
        return view('pages.events.luj', compact('page'));
    })->name('luj');
    Route::get('seminar', function () {
        $page = Page::where('route_name', 'pae-events.seminar')->get()->first();
        return view('pages.events.seminar', compact('page'));
    })->name('seminar');
    Route::get('conference', function () {
        $page = Page::where('route_name', 'pae-events.conference')->get()->first();
        return view('pages.events.conference', compact('page'));
    })->name('conference');
    Route::get('evaluation', function () {
        $page = Page::where('route_name', 'pae-events.evaluation')->get()->first();
        return view('pages.events.evaluation', compact('page'));
    })->name('evaluation');
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('', function () {
        $pages = Page::all();
        $events = Event::all();
        $news = News::all();
        $posts = Post::all();
        $users = User::all();
        $subscribers = Subscriber::all();
        return view('pages.admin.dashboard', compact('pages', 'events', 'news', 'posts', 'users', 'subscribers'));
    })->name('dashboard');

    Route::get('notifications', function () {
        $notifications = Auth::user()->notifications;
        return view('pages.admin.notifications', compact('notifications'));
    })->name('notifications');

    Route::resource('pages', 'Admin\PagesController');

    Route::resource('projects', 'Admin\ProjectsController');

    Route::resource('events', 'Admin\EventsController');

    Route::resource('users', 'Admin\UsersController');

    Route::resource('posts', 'Admin\PostsController');
});

Auth::routes();

Route::redirect('home', '/')->name('home');
