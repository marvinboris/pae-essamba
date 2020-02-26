<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::paginate(15);
        return view('pages.admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin.projects.create');
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
        $input['user_id'] = Auth::user()->id;
        $project = Project::create($input);
        Session::flash('created_project', 'Le projet ' . $project->title_fr . ' a été ajouté.');
        return redirect(route('admin.projects.index'));
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
        $project = Project::findOrFail($id);
        return view('pages.admin.projects.edit', compact('project'));
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
        $project = Project::findOrFail($id);
        $input = $request->except(['content_fr', 'content_en']);
        foreach ($input as $key => $value) {
            $input[$key] = htmlspecialchars($value);
        }
        $input['content_fr'] = $request->content_fr;
        $input['content_en'] = $request->content_en;
        $project->update($input);
        Session::flash('updated_project', 'Le projet ' . $project->title_fr . ' a été modifié.');
        return redirect(route('admin.projects.edit', $id));
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
        $project = Project::findOrFail($id);
        $project->delete();
        Session::flash('deleted_project', 'Le projet ' . $project->title_fr . ' a été supprimé.');
        return redirect(route('admin.projects.index'));
    }
}
