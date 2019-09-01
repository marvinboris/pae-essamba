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
use App\Page;
use App\Post;
use App\User;

Route::get('', function () {
    $page = Page::where('route_name', 'welcome')->get()->first();
    return view('welcome', compact('page'));
})->name('welcome');

Route::prefix('pae-essamba')->name('pae-essamba.')->group(function () {
    Route::get('about', function () {
        $page = Page::where('route_name', 'pae-essamba.about')->get()->first();
        return view('about', compact('page'));
    })->name('about');
    Route::get('blog', function () {
        $page = Page::where('route_name', 'pae-essamba.blog')->get()->first();
        return view('blog', compact('page'));
    })->name('blog');
});

Route::prefix('posts')->name('posts.')->group(function () {
    Route::get('reports', function () {
        return;
    })->name('reports');

    Route::get('articles', function () {
        return;
    })->name('articles');

    Route::get('essamba-echo', function () {
        return;
    })->name('essamba-echo');

    Route::get('procedure', function () {
        return;
    })->name('procedure');
});

Route::get('contact', function () {
    $page = Page::where('route_name', 'contact')->get()->first();
    return view('contact', compact('page'));
})->name('contact');

Route::get('news', function () {
    $page = Page::where('route_name', 'news')->get()->first();
    return view('news', compact('page'));
})->name('news');

Route::prefix('pae-events')->name('pae-events.')->group(function () {
    Route::get('luj', function () {
        $page = Page::where('route_name', 'pae-events.luj')->get()->first();
        return view('luj', compact('page'));
    })->name('luj');
    Route::get('seminar', function () {
        $page = Page::where('route_name', 'pae-events.seminar')->get()->first();
        return view('seminar', compact('page'));
    })->name('seminar');
    Route::get('conference', function () {
        $page = Page::where('route_name', 'pae-events.conference')->get()->first();
        return view('conference', compact('page'));
    })->name('conference');
    Route::get('evaluation', function () {
        $page = Page::where('route_name', 'pae-events.evaluation')->get()->first();
        return view('evaluation', compact('page'));
    })->name('evaluation');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('', function () {
        $pages = Page::all();
        $events = Event::all();
        $news = News::all();
        $posts = Post::all();
        $users = User::all();
        return view('admin.dashboard', compact('pages', 'events', 'news', 'posts', 'users'));
    })->name('dashboard');

    Route::resource('pages', 'Admin\PagesController');

    Route::resource('projects', 'Admin\ProjectsController');

    Route::resource('events', 'Admin\EventsController');

    Route::resource('users', 'Admin\UsersController');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
