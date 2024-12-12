<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lecturers = Lecturer::all();
        return view('lecturers.index', compact('lecturers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lecturers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'lecturer_code' => 'required|unique:lecturers|max:3',
            'lecturer_name' => 'required',
            'nip' => 'required|unique:lecturers',
            'email' => 'required|email|unique:lecturers',
        ]);
    
        Lecturer::create($request->all());
        return redirect()->route('lecturers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('lecturers.show', compact('lecturer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('lecturers.edit', compact('lecturer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'lecturer_code' => 'required|max:3|unique:lecturers,lecturer_code,' . $lecturer->id,
            'lecturer_name' => 'required',
            'nip' => 'required|unique:lecturers,nip,' . $lecturer->id,
            'email' => 'required|email|unique:lecturers,email,' . $lecturer->id,
        ]);
    
        $lecturer->update($request->all());
        return redirect()->route('lecturers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lecturer->delete();
        return redirect()->route('lecturers.index');
    }
}
