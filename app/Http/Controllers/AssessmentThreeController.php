<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssessmentThreeController extends Controller
{
    public function index($str)
    {
        $output = $this->alphabetSoup($str);
        return response()->json(['output', $output]);
    }

    public function callApi(Request $request)
    {
        $str = $request->str;
        $output = $this->alphabetSoup($str);
        return response()->json(['output', $output]);
    }

    private function alphabetSoup($str)
    {
        $length = strlen($str);
        $array = str_split($str);
        sort($array);
        $str = implode($array);
        $str = str_replace(" ", "",$str);
        return $str;
    }
}
