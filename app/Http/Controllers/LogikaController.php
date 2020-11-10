<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogikaController extends Controller
{
    // untuk bilangan prima
    public function bilanganPrima(Request $request)
    {
        
        $count=0;
        for($i=2;$i<=$request->nilai/2;$i++)
        {
            if($request->nilai % $i==0)
            {
                $count++;
            }
        }

        if($count>0 || $request->nilai<2)
        {
            print $request->nilai." no Prime";
        }
        else
        {
            print $request->nilai." is Prime";
        }


    }

    //

}
