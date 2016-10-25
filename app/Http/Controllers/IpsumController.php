<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class IpsumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('generator.ipsum');
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
        'numParagraphs' => 'required|numeric|min:1|max:50',
      ]);

      # grab input
      $input = $request->input('numParagraphs');
      $generator = new \Badcow\LoremIpsum\Generator();
      $paragraphs = $generator->getParagraphs($input);

      return view('generator.ipsum_confirm')->with(compact('paragraphs'));
    }
}
