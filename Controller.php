<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

protected $redirectTo = '/home';

//function that inserts donor details to database
    public function insert(Request $req)
    {
    	$full_name=$req->input('full_name');
    	$nationality=$req->input('nationality');
    	$age=$req->input('age');
    	$phone_number=$req->input('phone_number');
    	$address=$req->input('address');
    	$username=$req->input('username');

    	$data= array('full_name' =>$full_name ,'nationality' =>$nationality,'age' =>$age,'phone_number' =>$phone_number,'address' =>$address,'username' =>$username);

    	DB::table('add_donors')->insert($data);
    	return redirect('/donordisp');

    }

    //function that retrieves donors record from database
    public function getData()
   {
       $data['data']=DB::table('add_donors')->get();

           if (count($data)>0)
            {
              return view('donordisp',$data); 
           }
           else{
            return view('donordisp');
           }


   }
//function that saves donation records to the database
     public function stores(Request $req)
    {
    	$received_from=$req->input('received_from');
    	$nationality=$req->input('nationality');
    	$amount_received=$req->input('amount_received');
    	$received_on=$req->input('received_on');
    	$received_by=$req->input('received_by');
    	$registered_by=$req->input('registered_by');

    	$data= array('received_from' =>$received_from,'nationality' =>$nationality,'amount_received' =>$amount_received,'received_on' =>$received_on,'received_by' =>$received_by,'registered_by' =>$registered_by);

    	DB::table('donations')->insert($data);
    	return redirect('/donationdisp');

    }
     //function that retrieves donors record from database
    public function getDonations()
   {
       $data['data']=DB::table('donations')->get();

           if (count($data)>0)
            {
              return view('donationdisp',$data); 
           }
           else{
            return view('donationdisp');
           }


   }

    //function that saves agents records to the database

     public function saves(Request $req)
    {
    	$full_name=$req->input('full_name');
    	$username=$req->input('username');
    	$age=$req->input('age');
    	$phone_number=$req->input('phone_number');
    	$email=$req->input('email');
    	$address=$req->input('address');
    	$registered_on=$req->input('registered_on');
    	$registered_by=$req->input('registered_by');

    	$data= array('full_name' =>$full_name,'username' =>$username,'age' =>$age,'phone_number' =>$phone_number,'email' =>$email,'address' =>$address,'registered_on' =>$registered_on,'registered_by' =>$registered_by);

    	DB::table('agents')->insert($data);
    	return redirect('/agentdisp');

    }
     //function that retrieves donors record from database
    public function getAgents()
   {
       $data['data']=DB::table('agents')->get();

           if (count($data)>0)
            {
              return view('agentdisp',$data); 
           }
           else{
            return view('agentdisp');
           }


   }

}
