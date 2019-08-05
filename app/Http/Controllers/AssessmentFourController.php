<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssessmentFourController extends Controller
{
    public function index($str)
    {
        $output = $this->checkPalindrome($str);
        return response()->json(['output', $output]);
    }

    public function callApi(Request $request)
    {
        $str = $request->str;
        $output = $this->checkPalindrome($str);
        return response()->json(['output', $output]);
    }

    private function checkPalindrome($str)
    {
        $length = strlen($str);
        $output = "";
        for ($i = $length; $i > 0; $i--) {
            $output .= substr($str, $i-1,1);
        }
        if ($output === $str) {
            return true;
        } else {
            return false;
        }
    }
}
