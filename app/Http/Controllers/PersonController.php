<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    function getPerson(Request $request, $name=null){
        return response("Hello {$name}",200);

    }
    function getPersonById(Request $request, $id=null){
        if($id==null){  
        return response("Please provide an id", 400);
        }else{
            return response("The Id is {$id}",200);
        }
    }

    function personAccount(Request $request, $name=null, $accountId=null){ 
    return response("Hello {$name}, your account number is {$accountId}",200);
    }
}