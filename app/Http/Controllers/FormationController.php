<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\UserFormation;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index() {
        $formations = Formation::all();
        return view('formation.index', compact('formations'));
    }

    public function coming() {
        return view('formation.coming');
    }

    public function apply($id) {
        $formation = Formation::findOrFail($id);
        UserFormation::create([
            'formation_id' => $formation->id,
            'user_id' => Auth::user()->id,
        ]);
        return redirect('formation/coming');
    }

    public function cancel($id) {
        $formation = Formation::findOrFail($id);
        UserFormation::where('user_id', Auth::user()->id)->where('formation_id', $id)->delete();
        return redirect('formation/coming');
    }

    public function edit($id) {
        $formation = Formation::findOrFail($id);
        return view('formation.edit', compact('formation'));
    }

    public function show($id) {
        $formation = Formation::findOrFail($id);
        return view('formation.show', compact('formation'));
    }

    public function add() {
        return view('formation.add');
    }

    public function add_store(Request $request) {
        $this->validate($request, [
            'label' => 'required|unique:formation|max:255',
            'description' => 'max:255',
        ]);

        $formation = new Formation;
        $formation->fill($request->all());
        $formation->save();
        return redirect('formation');
    }

    public function edit_store(Request $request, $id) {
        $formation = Formation::findOrFail($id);

        $validation_rules = ['description' => 'max:255'];
        if($formation->libelle != $request->label) {
            $validation_rules['label'] = 'required|max:255|unique:formation,label,' . $id;
        }
        $this->validate($request, $validation_rules);

        if($formation->label != $request->label) {
            $formation->label = $request->label;
        }
        $formation->description = $request->description;
        $formation->save();
        return redirect('formation');
    }

    public function delete($id) {
        Formation::destroy($id);
        return redirect('formation');
    }
}
