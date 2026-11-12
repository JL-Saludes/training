<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Program::all();
        return view('admin.programs.index', compact('programs'));
    
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.programs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'code' => ['required', 'string', 'max:20', 'unique:programs,code'],
            'name' => ['required', 'string', 'max:255'],
            'college' => ['required', 'string', 'max:255'],
            'slots' => ['required', 'integer', 'min:0'],
            'is_active' => ['required', 'boolean']
        ]);

        Program::create($validate);
        
        /*
        $program = new Program();
        $program->code = $request->code;
        $program->name = $request->name;
        $program->college = $request->college;
        $program->slot = $request->slot;
        $program->is_active = $request->is_active;
        $program->save();
        */

        return redirect()->route('admin.programs.index')->with('success', 'Program Added Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
        return view('admin.programs.show', compact('program'));

    }

        /**
         * Show the form for editing the specified resource.
        */
        public function edit(Program $program)
        {
            //
            return view('admin.programs.edit', compact('program'));
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program $program)
    {
        $validated = $request->validate([
            'code' => ['required', 'string', 'max:20', 'unique:programs,code'],
            'name' => ['required', 'string', 'max:255'],
            'college' => ['required', 'string', 'max:255'],
            'slot' => ['required', 'integer', 'min:0'],
            'is_active' => ['required', 'boolean']
        ]);

        $program->update($validated);
        return redirect()->route('admin.programs.index')->with('success', "Program {$program->code} updated successfully.");
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->route('admin.programs.index')->with('success', "Program $program->code deleted successfully.");
       
    }
}
