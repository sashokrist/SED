<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SedController extends Controller
{
    public function index()
    {
        return view('sed');
    }

    public function loadData(Request $request)
    {
       // validate request
        $validated = $request->validate([
            'input' => 'mimes:txt', //only txt file
            'pattern' => 'required',
            'replace' => 'required'
             ]);
        // check if input is from file or textarea
        if ($request->input === null){
            $input = $request->input2;
        } else{
            $input = file_get_contents($request->input);
        }
        $pattern = $request->pattern;
        $replace = $request->replace;
        // replace
        $output = preg_replace("/".$pattern."/", $replace, $input);
        // save as text file storage/app/output.txt
        Storage::put('output.txt', $output);

        return view('result', compact('output', 'input', 'pattern', 'replace'));

    }
}
