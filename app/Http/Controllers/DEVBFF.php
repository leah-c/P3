<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DEVBFF extends Controller
{

  # return the home view to users, shows all tools
  public function home()
  {
    return view('generator.home');
  }

  # return the ipsum generator landing page view to users
  public function ipsumHome()
  {
      return view('generator.ipsum');
  }

  # return the random user generator landing page view to users
  public function userHome()
  {
      return view('generator.user');
  }

  # creates ipsum filler text based on number of paragrphs user specifies
  # returns an array of ipsum text  to the view
  public function createIpsum(Request $request)
  {
    # Validation
    $this->validate($request, [
      'numParagraphs' => 'required|numeric|min:1|max:50',
    ]);

    # generate paragraphs
    $input = $request->input('numParagraphs');
    $generator = new \Badcow\LoremIpsum\Generator();
    $paragraphs = $generator->getParagraphs($input);

    return view('generator.ipsum_confirm')->with(compact('paragraphs'));
  }

  # creates randomly generated users based on the number user specifies
  # returns an array of users to the view
  public function createUsers(Request $request)
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
