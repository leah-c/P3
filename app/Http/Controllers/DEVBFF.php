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
    $numParagraphs = $request->input('numParagraphs');
    $generator = new \Badcow\LoremIpsum\Generator();
    $paragraphs = $generator->getParagraphs($numParagraphs);

    return view('generator.ipsum_confirm')
      ->with('numParagraphs', $numParagraphs)
      ->with(compact('paragraphs'));
  }

  # creates randomly generated users based on the number user specifies
  # add any extras
  # returns an array of users to the view
  public function createUsers(Request $request)
  {
    # Validation
    $this->validate($request, [
      'numUsers' => 'required|numeric|min:1|max:99',
    ]);

    # var initialization
    $addPhoneNum = false;
    $addAddress = false;
    $addBlurb = false;

    # check to make sure choices are selected
    if (isset( $_POST['phone_num'])) {
        $addPhoneNum = true;
    };

    if (isset( $_POST['address'])) {
        $addAddress = true;
    };

    if (isset( $_POST['blurb'])) {
        $addBlurb = true;
    };

    #generate users
    $numUsers = $request->input('numUsers');

    $faker = \Faker\Factory::create();
    $users = array();

    # for each user name created, check to see if other options where
    # selected
    for ($i=0; $i < $numUsers; $i++) {
      $users['name'.$i] = $faker->name;

      if($addPhoneNum){
        $users['phone'.$i]= $faker->phonenumber;
      }

      if($addAddress){
        $users['address'.$i] = $faker->Address;
      }

      if($addBlurb){
        $users['blurb'.$i] = $faker->text;
      }
    }

    return view('generator.user_confirm')
      ->with('numUsers', $numUsers)
      ->with(compact('users'));
  }
}
