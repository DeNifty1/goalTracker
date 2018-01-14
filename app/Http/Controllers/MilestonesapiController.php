<?php

namespace App\Http\Controllers;

use App\Milestone;
use Illuminate\Http\Request;

class MilestonesapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return Milestone::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $milestone = Milestone::create($request->all());
        return response()->json($milestone, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Milestone  $milestone
     * @return \Illuminate\Http\Response
     */
    public function show(Milestone $milestone) {
        return $milestone;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Milestone  $milestone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Milestone $milestone) {
        $milestone->update($request->all());
        return response()->json($milestone, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Milestone  $milestone
     * @return \Illuminate\Http\Response
     */
    public function destroy( Milestone $milestone) {
        $milestone->delete();
        return response()->json(null, 204);
    }
}
