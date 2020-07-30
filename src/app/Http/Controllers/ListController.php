<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Country;

class ListController extends Controller
{

    public function index()
    {
        $members = Person::paginate(20);


        return response()->view('list', compact('members'));
    }

}
