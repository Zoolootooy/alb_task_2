<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;

class AccountController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }

    public function members_list_admin()
    {
        $members = Person::paginate(10);
        return response()->view('admin.list', compact('members'));
    }
}
