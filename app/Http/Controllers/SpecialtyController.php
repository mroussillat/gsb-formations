<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    public function index() {
        $specialties = Specialty::all();
        return view('specialty.index', compact('specialties'));
    }

    public function show($id) {
        $specialty = Specialty::findOrFail($id);
        return view('specialty.edit', compact('specialty'));
    }

    public function add(Request $request) {
        $this->validate($request, [
            'label' => 'required|unique:formation|max:255'
        ]);

        $specialty = new Specialty;
        $specialty->fill($request->all());
        $specialty->save();
        return redirect('specialty');
    }

    public function edit(Request $request, $id) {
        $specialty = Specialty::findOrFail($id);

        $this->validate($request, [
            'label' => 'required|unique:formation|max:255|unique:specialty,label,' . $id
        ]);

        $specialty->fill($request->all());
        $specialty->save();
        return redirect('specialty');
    }

    public function delete($id) {
        Specialty::destroy($id);
        return redirect('specialty');
    }
}
