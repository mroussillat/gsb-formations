<?php

namespace App\Http\Controllers;

use App\Models\Formation;

use App\Models\Session;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index() {
        $sessions = Session::all();
		$formations = Formation::all();
        return view('session.index', ['sessions' => $sessions, 'formations' => $formations]);
    }
    
    
    public function show($id) {
        $session = Session::findOrFail($id);
        return view('session.edit', compact('session'));
    }
    

     public function add(Request $request) {
        $this->validate($request, [
            'date' => 'required|max:30',
            'formation_id' => 'required|max:10',
            'number_of_place' => 'required|max:10'
        ]);

        $session = new Session;
        $session->fill($request->all());
        $session->save();
        return redirect('session');
    }



	public function edit(Request $request, $id) {
        $session = Session::findOrFail($id);

        $this->validate($request, [
            'number_of_place' => 'required|max:30',
            'formation_id' => 'required|max:10',
            'date' => 'required|max:30'
        ]);

        $session->fill($request->all());
        $session->save();
        return redirect('session');
    }


    public function delete($id) {
        Session::destroy($id);
        return $this->index();
    }
}
