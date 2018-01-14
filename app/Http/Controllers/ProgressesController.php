<?php

namespace App\Http\Controllers;

use App\Progress;
use Illuminate\Http\Request;
//use Request;

class ProgressesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $progresses = Progress::orderBy('progressName', 'asc')->get();
        return view('progresses.index')->with('progresses', $progresses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('progresses.create');
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
            'progressName' => 'required'
        ]);
        $newProgress = new Progress();
        $newProgress->progressName = $request->input('progressName');
        $newProgress->created_at = date("Y-m-d H:i:s");
        $newProgress->updated_at =  date("Y-m-d H:i:s");
        $newProgress->save();

        return redirect('progresses')->with('success', 'Progress Saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function show(Progress $progress) {
        return view('progresses.show')->with('progress', $progress);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function edit(Progress $progress) {
        return view('progresses.edit')->with('progress', $progress);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Progress $progress) {
        // Validation Logic
        $this->validate($request,[
            'progressName' => 'required'
        ]);
        $progress->progressName = $request->input('progressName');
        $progress->updated_at =  date("Y-m-d H:i:s");
        $progress->save();

        return redirect('progresses')->with('success', 'Progress Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Progress $progress) {
        $progress->delete();
        return redirect('progresses')->with('success', 'Progress Deleted.');
    }
}
