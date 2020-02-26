<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pages = Page::all();
        return view('pages.admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->except(['content_fr', 'content_en']);
        foreach ($input as $key => $value) {
            $input[$key] = htmlspecialchars($value);
        }
        $input['content_fr'] = $request->content_fr;
        $input['content_en'] = $request->content_en;
        $page = Page::create($input);
        Session::flash('created_page', 'La page ' . $page->title_fr . ' a été ajoutée.');
        return redirect(route('admin.pages.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $jsonString = file_get_contents(base_path('content.json'));
        $contentFile = json_decode($jsonString, true);

        $page = Page::findOrFail($id);
        $strings = explode('.', $page->route_name);
        $content = $contentFile;
        foreach ($strings as $string) {
            $content = $content[$string];
        }
        return view('pages.admin.pages.edit.' . $page->route_name, compact('page', 'content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $jsonString = file_get_contents(base_path('content.json'));
        $contentFile = json_decode($jsonString, true);

        $page = Page::findOrFail($id);
        $input = $request->all();
        $page->update($input);

        foreach ($input as $key => $value) {
            $strings = explode('+', $key);
            if (count($strings) > 1 && $value !== null) {
                $tmp = $value;
                if ($file = $request->file($key)) {
                    $fileName = time() . $file->getClientOriginalName();
                    $file->move('assets/images', $fileName);
                    $tmp = $fileName;
                }
                for ($i = 0; $i < count($strings) - 1; $i++) {
                    $content = $contentFile;
                    for ($j = 0; $j < count($strings) - 1 - $i; $j++) {
                        $content = $content[$strings[$j]];
                    }
                    $content[$strings[count($strings) - 1 - $i]] = $tmp;
                    $tmp = $content;
                }
                $contentFile[$strings[0]] = $tmp;
            }
        }

        $contentText = json_encode($contentFile);
        file_put_contents(base_path('content.json'), $contentText);

        Session::flash('updated_page', 'La page ' . $page->title_fr . ' a été modifiée.');
        return redirect(route('admin.pages.edit', $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $page = Page::findOrFail($id);
        $page->delete();
        Session::flash('deleted_page', 'La page ' . $page->title_fr . ' a été supprimée.');
        return redirect(route('admin.pages.index'));
    }
}
