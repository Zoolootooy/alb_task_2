<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;

class AdminController extends Controller
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

    public function changeShow(Request $request){
        $id = $request->input('idMember');
        $show = $request->input('show');
        if ($show == "true"){
            $show = 1;
        }
        if ($show == "false"){
            $show = 0;
        }
        $person = Person::where('id', $id)->first();

        $person->update(compact('id', 'show'));
        $id = $person->id;

        if ($id != false) {
            echo "true";
        } else {
            echo "false";
        }
    }

    public function changeAllShow(Request $request){
        $show = $request->input('show');
        if ($show == "true"){
            $show = 1;
        }
        if ($show == "false"){
            $show = 0;
        }

      \DB::table('people')->update(compact('show'));

//        if ($id != false) {
            echo "true";
//        } else {
//            echo "false";
//        }
    }
}
