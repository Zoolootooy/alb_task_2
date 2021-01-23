<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Requests\EmailRequest;
use PharIo\Manifest\Email;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        $map_api = config('map.map_api');
        $share_config = config('share_socnet');
        return response()->view('welcome', compact('countries', 'map_api', 'share_config'));
    }

    public function saveData(PostRequest $request)
    {
        $ok = false;
        $person = Person::create($request->validated());

        if ($person !== null) {
            setcookie("email", $person->email);
            setcookie("idUser", $person->id);
            $ok = true;
        }

        return response()->json($ok);
    }

    public function checkEmail(EmailRequest $req)
    {
        $exists = Person::where('email', '=', $req->email)->exists();

        return response()->json(!$exists);
    }

    public function updateData(Request $request)
    {
        $id = $_COOKIE['idUser'];
        $email = $_COOKIE['email'];
        $person = Person::where('id', $id)->where('email', $email)->first();

        $filename = Person::uploadImage($request->file('photo'));

        $person->update($request->all());
        if ($filename != null) {
            $person->update(['photo' => $filename]);
        }
        $id = $person->id;

        if ($id != false) {
            return response()->json(true);
        } else {
            return response()->json(false);
        }
    }

    public function getMembersNumber()
    {
        $count = Person::where('show', 1)->count();
        echo $count;
    }


    public function newForm()
    {
        setcookie("email", "", time() - 3600);
        setcookie("idUser", "", time() - 3600);
        return redirect()->route('main');
    }
}
