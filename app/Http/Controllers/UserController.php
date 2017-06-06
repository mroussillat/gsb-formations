<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Specialty;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function add() {
        $specialties = Specialty::all();
        return view('user.add', compact('specialties'));
    }

    public function add_store(Request $request) {
        $this->validate($request, [
            'firstname' => 'required|min:3|string|max:255',
            'surname' => 'required|min:3|string|max:255',
            'login' => 'required|min:3|max:255',
            'password' => 'required|min:8|max:255',
            'adress' => 'required|max:255',
            'postal_code' => 'required|integer|digits:5',
            'city' => 'required|min:3|max:255',
            'hiring_date' => 'required|date',
            'specialties' => 'array'
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'surname' => $request->surname,
            'login' => $request->login,
            'password' => bcrypt($request->password),
            'adress' => $request->adress,
            'postal_code' => $request->postal_code,
            'city' => $request->city,
            'hiring_date' => $request->hiring_date
        ]);

        if(($specialties = $request->get('specialties')))
        {
            for($i=0;$i<count($specialties);$i++)
            {
                DB::statement('SELECT addSpecialty("'.$user->id.'","'.$specialties[$i].'")');
            }
        }
        $user->save();

        return redirect('user');
    }

	public function edit(Request $request, $id) {
		$user = User::findOrFail($id);

		$validation_rules = [
            'firstname' => 'required|min:3|string|max:255',
            'surname' => 'required|min:3|string|max:255',
            'login' => 'required|min:3|max:255',
            'adress' => 'required|max:255',
            'postal_code' => 'required|integer|digits:5',
            'city' => 'required|min:3|max:255',
            'hiring_date' => 'required|date',
            'specialties' => 'array',
            'delegate' => 'exists:user,id'
        ];

        if($request->password) {
            $validation_rules['password'] = 'required|min:8|max:255';
        }
        $this->validate($request, $validation_rules);

        if($user->password != $request->password) {
            $user->password = $request->password;
        }

        $user->surname = $request->surname;
        $user->firstname = $request->firstname;
        $user->login = $request->login;
        $user->password = bcrypt($request->password);
        $user->adress = $request->adress;
        $user->postal_code = $request->postal_code;
        $user->city = $request->city;
        $user->hiring_date = $request->hiring_date;
        $user->specialties()->detach();

        if(($specialties = $request->get('specialties')))
        {
            for($i=0;$i<count($specialties);$i++)
            {
                DB::statement('SELECT addSpecialty("'.$user->id.'","'.$specialties[$i].'")');
            }
        }

        $user->save();
		return redirect('user');
    }

    public function delete($id) {
        User::destroy($id);
        return $this->index();
    }

	public function show($id) {
		$user = User::findOrFail($id);
        $specialties = Specialty::all();
        $users = User::all()->whereNotIn('id', $id);
		return view('user.edit', compact('user','specialties','users'));
	}
}
