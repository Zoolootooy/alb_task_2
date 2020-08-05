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
        $person = Person::create($request->all());
        $id = $person->id;
        $email = $person->email;

        if ($id != false) {
            setcookie("email", $email);
            setcookie("idUser", $id);
            echo "true";
        } else {
            echo "false";
        }
    }

    public function checkEmail(EmailRequest $req)
    {
        if (Person::where('email', '=', $req->input('email'))->count() > 0) {
            echo(json_encode(false));
        } else {
            echo(json_encode(true));
        }
    }

    public function updateData(Request $request)
    {
        $id = $_COOKIE['idUser'];
        $email = $_COOKIE['email'];
        $person = Person::where('id', $id)->where('email', $email)->first();

        $filename = $this->uploadImage($request->file('photo'));
        $person->photo = $filename;

        $person->update($request->all());
        $id = $person->id;

        if ($id != false) {
            echo "true";
        } else {
            echo "false";
        }
    }

    public function getMembersNumber()
    {
        $count = Person::where('show', '=', 1)->count();
        echo $count;
    }

    public function uploadImage($photo)
    {
        if (isset($photo) && !empty($photo)) {
            $filename = $photo->store('images', 'public');
            $filename = explode('/', $filename)[1];
        } else {
            $filename = null;
        }
        return $filename;

    }

    public function new_form()
    {
        setcookie("email", "", time() - 3600);
        setcookie("idUser", "", time() - 3600);
        return redirect()->route('main');
    }
}
