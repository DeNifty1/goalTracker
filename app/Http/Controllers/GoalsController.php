<?php

namespace App\Http\Controllers;

use App\Goal;
use Illuminate\Http\Request;
//use Request;

class GoalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // $goals = Goal::all();
        // $goals = Goal::orderBy('goalName', 'asc')->paginate(10); //like all with sorting and 10 records per page
        // $goals = Goal::orderBy('id', 'desc')->get(); // Sorting normally
        $goals = Goal::latest('created_at')->get(); // Sorting by dates latest|oldest
        return view('goals.index')->with('goals', $goals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('goals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // Validation Logic
        $this->validate($request,[
            'goalName' => 'required'
        ]);
        $newGoal = new Goal();
        $newGoal->goalName = $request->input('goalName');
        $newGoal->created_at = date("Y-m-d H:i:s");
        //$newGoal->updated_at =  date("Y-m-d H:i:s");
        $newGoal->save();

        return redirect('goals')->with('success', 'Goal created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $goal = Goal::find($id);
        return view('goals.show')->with('goal', $goal);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $goal = Goal::find($id);
        return view('goals.edit')->with('goal', $goal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        // Validation Logic
        $this->validate($request,[
            'goalName' => 'required'
        ]);
        $goal = Goal::find($id);
        $goal->goalName = $request->input('goalName');
        $goal->created_at = date("Y-m-d H:i:s");
        //$goal->updated_at =  date("Y-m-d H:i:s");
        $goal->save();

        return redirect('goals')->with('success', 'Goal Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $goal = Goal::find($id);
        $goal->delete();
        return redirect('goals')->with('success', 'Goal Deleted.');
    }
}
