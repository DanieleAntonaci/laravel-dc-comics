<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $people = Person::all();
        return view('pages.index', compact('people'));
    }
    public function personShow(Person $person){
        return view('pages.personShow', compact('person'));
    }
    public function personDestroy(Person $person){
        $person->delete();
        return redirect()->route('index');
    }
}
