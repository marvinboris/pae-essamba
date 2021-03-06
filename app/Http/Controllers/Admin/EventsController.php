<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::paginate(15);
        return view('pages.admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin.events.create');
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
        $event = Event::create($input);
        Session::flash('created_event', 'L\'évènement ' . $event->title_fr . ' a été ajouté.');
        return redirect(route('admin.events.index'));
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
        $event = Event::findOrFail($id);
        return view('pages.admin.events.edit', compact('event'));
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
        $event = Event::findOrFail($id);
        $input = $request->except(['content_fr', 'content_en']);
        foreach ($input as $key => $value) {
            $input[$key] = htmlspecialchars($value);
        }
        $input['content_fr'] = $request->content_fr;
        $input['content_en'] = $request->content_en;
        $event->update($input);
        Session::flash('updated_event', 'L\'évènement ' . $event->title_fr . ' a été modifié.');
        return redirect(route('admin.events.edit', $id));
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
        $event = Event::findOrFail($id);
        $event->delete();
        Session::flash('deleted_event', 'L\'évènement ' . $event->title_fr . ' a été supprimé.');
        return redirect(route('admin.events.index'));
    }
}
