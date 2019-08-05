<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssessmentOneController extends Controller
{
    public function index($num)
    {
        $output = $this->firstFactorial($num, 1);
        return response()->json(['output', $output]);
    }

    public function callApi(Request $request)
    {
        $num = $request->num;
        $output = $this->firstFactorial($num, 1);
        return response()->json(['output', $output]);
    }

    private function firstFactorial($num, $result)
    {
        $result = $result * $num;
        if ($num > 1) {
            $num--;
            $result = $this->firstFactorial($num, $result);
        }

        return $result;
    }
}
