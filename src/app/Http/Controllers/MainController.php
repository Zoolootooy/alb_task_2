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
        return response()->view('welcome', compact('countries'));
    }

    public function saveData(PostRequest $req){
        $person = new Person();
        $person->firstname = $req->input('firstname');
        $person->lastname = $req->input('firstname');
        $person->birthdate = $req->input('birthdate');
        $person->rep_subject = $req->input('rep_subject');
        $person->country_id = $req->input('country_id');
        $person->phone = $req->input('phone');
        $email = $req->input('email');
        $person->email = $email;
        $person->show = 1;

        $person->save();
        $id = $person->id;

        if ($id != false) {
            setcookie("email", $email);
            setcookie("idUser", $id);
            echo "true";
        } else {
            echo "false";
        }
    }

    public function checkEmail(EmailRequest $req){
        if (Person::where('email', '=', $req->input('email'))->count() > 0) {
            echo(json_encode(false));
        } else {
            echo(json_encode(true));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
