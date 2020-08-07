<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Country;
use Illuminate\Pagination\Paginator;

class ListController extends Controller
{

    public function index()
    {
        $members = Person::where('show', 1)->paginate(10);
        return response()->view('list', compact('members'));
    }

}
