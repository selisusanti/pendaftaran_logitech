<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\UsersRegister;
use GuzzleHttp\Client;


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



    //register form 
    public function registerForm()
    {
        //access api client to get provinces;
        $client     = new Client();
        $request2   = $client->get('https://api.rajaongkir.com/starter/city', [
                        \GuzzleHttp\RequestOptions::HEADERS      => array(
                            'key'        => '0df6d5bf733214af6c6644eb8717c92c',
                            'Content-Type' => 'application/json',
                        )
        ]);
        
        $data = $request2->getBody()->getContents();
        // return json_encode($response->rajaongkir);

        return view('page/dashboard/index' , compact('data'));

    }

     //register form 
    public function daftarForm(Request $request)
    {
        \Validator::make($request->all(), [
            'firstName' => 'required|string|max:255', 
            'lastName' => 'string|max:255', 
            'tehnical_email' => 'required|email|max:255', 
            'password' => 'required|string|min:8|max:8', 
            'hobi' => 'required', 
            'birth_date' => 'required', 
            'cc_expired' => 'required', 
            'cc_type' => 'required', 
            'ccNumber' => 'required', 
            'fee_vat' => 'required', 
            'membership_type' => 'required',
            
        ])->validate();

        \DB::beginTransaction();
        try{
            $store                = new UsersRegister;
            $store->firstname     = $request->firstName;
            $store->lastname      = $request->lastName; 
            $store->email         = $request->tehnical_email; 
            $store->password      = bcrypt($request->password); 
            $store->hobi          = json_encode($request['hobi']); 
            $store->address       = $request->alamat;  
            $store->birthdate     = $request->birth_date; 
            $store->membership_type  = $request->membership_type ; 
            $store->fee_vat          = $request->fee_vat ; 
            $store->cc_number        = $request->ccNumber ;
            $store->cc_type          = $request->cc_type; 
            $store->cc_expireddate   = $request->cc_expired;  
            $store->save();
            
            \DB::commit();
            return \Redirect::to("/register")->with('success', 'Data Register Berhasil Ditambahkan');
        
          
        } catch(\Error $e){
            return \Redirect::to("/register")->with('error', 'Data Register Gagal Ditambahkan');
        }    
       


    }

}
