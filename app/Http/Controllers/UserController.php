<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('generator.user');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      # Validation
      $this->validate($request, [
        'numUsers' => 'required|numeric|min:1|max:99',
      ]);

      #generate users
      $input = $request->input('numUsers');
      $faker = \Faker\Factory::create();
      $users = array();

      for ($i=0; $i < $input; $i++) {
        $users[] .= $faker->name;
      }

      return view('generator.user_confirm')->with(compact('users'));

    }
}
