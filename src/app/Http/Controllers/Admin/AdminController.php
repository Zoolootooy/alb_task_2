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

    public function membersListAdmin()
    {
        $members = Person::paginate(20);
        return response()->view('admin.list', compact('members'));
    }

    public function showToTinyInt($show)
    {
        if ($show == "true") {
            $res = 1;
        }
        if ($show == "false") {
            $res = 0;
        }
        return $res;
    }

    public function changeShow(Request $request)
    {
        $id = $request->idMember;
        $show = self::showToTinyInt($request->show);
        $person = Person::where('id', $id)->first();

        $person->update(compact('id', 'show'));
        $id = $person->id;

        if ($id != false) {
            return response()->json(true);
        } else {
            return response()->json(false);
        }
    }

    public function changeAllShow(Request $request)
    {
        $show = self::showToTinyInt($request->show);

        $id = Person::query()->update(compact('show'));

        if ($id != false) {
            return response()->json(true);
        } else {
            return response()->json(false);
        }
    }


}
