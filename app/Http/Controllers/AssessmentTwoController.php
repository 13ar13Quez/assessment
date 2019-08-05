<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssessmentTwoController extends Controller
{
    public function index($str)
    {
        $output = $this->firstReverse($str);
        return response()->json(['output', $output]);
    }

    public function callApi(Request $request)
    {
        $str = $request->str;
        $output = $this->firstReverse($str);
        return response()->json(['output', $output]);
    }

    private function firstReverse($str)
    {
        $length = strlen($str);
        $output = "";
        for ($i = $length; $i > 0; $i--) {
            $output .= substr($str, $i-1,1);
        }
        return $output;
    }
}
