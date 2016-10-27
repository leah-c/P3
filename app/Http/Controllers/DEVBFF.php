<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DEVBFF extends Controller
{

  public function home()
  {
    return view('generator.home');
  }

  public function ipsumHome()
  {
      return view('generator.ipsum');
  }

  public function userHome()
  {
      return view('generator.user');
  }

  public function createIpsum(Request $request)
  {
    # Validation
    $this->validate($request, [
      'numParagraphs' => 'required|numeric|min:1|max:50',
    ]);

    # grab input
    $input = $request->input('numParagraphs');
    $generator = new \Badcow\LoremIpsum\Generator();
    $paragraphs = $generator->getParagraphs($input);

    return view('generator.ipsum_confirm')->with(compact('paragraphs'));
  }

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
