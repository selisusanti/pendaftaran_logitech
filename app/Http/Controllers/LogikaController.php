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

    //bilangan array
    public function bilanganArray(Request $request)
    {
        $jml    = count($request->nilai);
        $nilai  = $request->nilai;

        for($i=0; $i<$jml-1; $i++)
        {
            $j=$i+1;
            if($nilai[$i]>=$nilai[$j])
            {
                $j=$nilai[$j]; 
            }
            else
            {
                $temp=$nilai[$j];
                if($nilai[$j]>=$temp)
                {
                    $maksimal=$nilai[$j];
                }
                else
                {
                    $maksimal=$temp;
                }
            }
        }

        return "nilai maksimal : " . $maksimal;
    }

    //bilangan array
    public function loopNilai(Request $request)
    {
        for($i=1;$i<=$request->nilai;$i++)
        {
            for($k=1;$k<=$i;$k++){
                print $k."<br>";
            }
        }
    }

    //bubble sorting 
    public function sortingValue(Request $request)
    {
        $temp;
        $array  = $request->nilai;
        $n      = count($request->nilai);

        for($i=0; $i<$n; $i++) 
        {
            for($j=0; $j<$n-$i-1; $j++)
            {
                if($array[$j]>$array[$j+1])
                {
                    $temp = $array[$j];
                    $array[$j] = $array[$j+1];
                    $array[$j+1] = $temp;
                }
            }
        }

        for ($i = 0; $i < $n; $i++) 
        {
            echo $array[$i]." "; 
        } 

    }

}
