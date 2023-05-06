<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use App\Models\Todos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $todos = Todos::all();
        // dd($todos);
        return view('dashboard', ['todos' => $todos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // dd($request->input('tags'));
        $todo = new Todos;
        $todo->title = "'" . $request->input('title') . "'";
        $todo->desc = "'" . $request->input('description') . "'";
        $todo->tags = "'" . $request->input('tags') . "'";
        $todo->save();


        return redirect()->back()->with('success', 'Todo created successfully.');
    }

    public function getFiltered($tag){
        $todos = Todos::where('tags', "'".$tag."'")->get();
        return view('dashboard', ['todos'=>$todos]);
    }

    public function delete($id){
        $todo = Todos::findorFail($id);
        $todo->delete();
        return redirect('/dashboard')->with('success', 'Todo deleted successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todos  $todos
     * @return \Illuminate\Http\Response
     */
    public function show(Todos $todos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todos  $todos
     * @return \Illuminate\Http\Response
     */
    public function edit(Todos $todos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todos  $todos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todos $todos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todos  $todos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todos $todos)
    {
        //
        
    }
}
