<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;
//use Request;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $types = Type::orderBy('typeName', 'asc')->get();
        return view('types.index')->with('types', $types);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('types.create');
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
            'typeName' => 'required'
        ]);
        $newType = new Type();
        $newType->typeName = $request->input('typeName');
        $newType->created_at = date("Y-m-d H:i:s");
        $newType->updated_at =  date("Y-m-d H:i:s");
        $newType->save();

        return redirect('types')->with('success', 'Type created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type) {
        return view('types.show')->with('type', $type);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type) {
        return view('types.edit')->with('type', $type);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type) {
        // Validation Logic
        $this->validate($request,[
            'typeName' => 'required'
        ]);
        $type->typeName = $request->input('typeName');
        $type->updated_at =  date("Y-m-d H:i:s");
        $type->save();

        return redirect('types')->with('success', 'Type Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type) {
        $type->delete();
        return redirect('types')->with('success', 'Type Deleted.');
    }
}
