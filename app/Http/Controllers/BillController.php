<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    public function billPrint()
    {
        return view('bill_print');
    }
    public function billCal(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $sum = $num1 - $num2;
        $result = $sum + ($sum * 0.07);
        return redirect()->route('bills.view')
            ->with('sum', $sum)->with('num1', $num1)->with('num2', $num2)->with('result', $result);
    }
    public function billView()
    {
        return view('bill_view');
    }
}