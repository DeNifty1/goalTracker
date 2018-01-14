<?php

namespace App\Http\Controllers;

use App\Milestone;
use Illuminate\Http\Request;
//use Request;

class MilestonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // $milestones = Milestone::all();
        // $milestones = Milestone::orderBy('milestoneName', 'asc')->paginate(10); //like all with sorting and 10 records per page
        // $milestones = Milestone::orderBy('id', 'desc')->get(); // Sorting normally
        $milestones = Milestone::latest('created_at')->get(); // Sorting by dates latest|oldest
        return view('milestones.index')->with('milestones', $milestones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('milestones.create');
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
            'milestoneName' => 'required'
        ]);
        $newMilestone = new Milestone();
        $newMilestone->milestoneName = $request->input('milestoneName');
        $newMilestone->created_at = date("Y-m-d H:i:s");
        $newMilestone->updated_at =  date("Y-m-d H:i:s");
        $newMilestone->save();

        return redirect('milestones')->with('success', 'Milestone created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Milestone  $milestone
     * @return \Illuminate\Http\Response
     */
    public function show(Milestone $milestone) {
        return view('milestones.show')->with('milestone', $milestone);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Milestone  $milestone
     * @return \Illuminate\Http\Response
     */
    public function edit(Milestone $milestone) {
        return view('milestones.edit')->with('milestone', $milestone);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Milestone  $milestone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Milestone $milestone) {
        // Validation Logic
        $this->validate($request,[
            'milestoneName' => 'required'
        ]);
        $milestone->milestoneName = $request->input('milestoneName');
        $milestone->created_at = date("Y-m-d H:i:s");
        //$milestone->updated_at =  date("Y-m-d H:i:s");
        $milestone->save();

        return redirect('milestones')->with('success', 'Milestone Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Milestone  $milestone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Milestone $milestone) {
        $milestone->delete();
        return redirect('milestones')->with('success', 'Milestone Deleted.');
    }
}
