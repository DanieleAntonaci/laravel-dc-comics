<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $people = Person::orderBy('id', 'desc')->get();
        return view('pages.index', compact('people'));
    }
    public function personShow(Person $person){
        return view('pages.personShow', compact('person'));
    }
    public function personDestroy(Person $person){
        $person->delete();
        return redirect()->route('index');
    }

    public function personCreate(){
        return view('pages.addPerson');
    }
    public function personStore(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:32',
            'lastName' => 'required|string|max:32',
            'dateOfBirth' => 'required',
            'height' => 'nullable'
        ]);

        $person = new Person();

        $person->name = $data['name'];
        $person->lastName = $data['lastName'];
        $person->dateOfBirth = $data['dateOfBirth'];
        $person->height = $data['height'];

        $person->save();

        return redirect()->route('index');
    }
    public function personEdit(Person $person){
        return view('pages.editPerson', compact('person'));
    }

    public function personUpdate(Request $request, Person $person){
        $data = $request->validate([
            'name' => 'required|string|max:32',
            'lastName' => 'required|string|max:32',
            'dateOfBirth' => 'required',
            'height' => 'nullable'
        ]);

        $person->name = $data['name'];
        $person->lastName = $data['lastName'];
        $person->dateOfBirth = $data['dateOfBirth'];
        $person->height = $data['height'];

        $person->save();

        return redirect()->route('index');
    }
}
