<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;
use App\Stuff;
use App\Http\Requests\StoreStuff;

class StuffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stuffs = Stuff::all();
        return view('stuff.index', compact('stuffs', $stuffs));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $positions = Position::all();
        return view('stuff.create')->with(['positions' => $positions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStuff $request)
    {
        $stuff = new Stuff;

        $stuff->first_name = $request->first_name;
        $stuff->last_name = $request->last_name;
        $stuff->email = $request->email;
        $stuff->city = $request->city;
        $stuff->role = $request->role;

        $stuff->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stuffs = Stuff::findOrFail($id);
        return view('stuff.edit', compact('stuffs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stuffs = Stuff::findOrFail($id);

        $stuffs->update($request->all());

        return redirect('/stuff');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
