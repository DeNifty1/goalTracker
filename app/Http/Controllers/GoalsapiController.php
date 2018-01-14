<?php

namespace App\Http\Controllers;

use App\Goal;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Resources\Goal as GoalResource;

class GoalsapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //return GoalResource::collection( Goal::all() );
        return GoalResource::collection( Goal::paginate(20) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $goal = Goal::create($request->all());
        return response()->json($goal, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function show(Goal $goal) {
        return new GoalResource($goal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Goal $goal) {
        $goal->update($request->all());
        return response()->json($goal, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function destroy( Goal $goal) {
        $goal->delete();
        return response()->json(null, 204);
    }
}
