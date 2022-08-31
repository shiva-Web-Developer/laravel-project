<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class POSTAPIcontroller extends Controller
{
    //
    function Datasend(Request $request)
    {
        // return ["API"=>"Pass"];
        $user = new Member;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
         $result = $user->save();
         if($result)
         {
            return ["Result"=>"success"];
         }
         else
         {
            return ["Result"=>"Failed"];
         }
    }

// for update 
    function update(Request $request)
    {
        $user = Member::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
         $result = $user->save();
         if($result)
         {
            return ["Result"=>"success"];
         }
         else
         {
            return ["Result"=>"Failed"];
         }
    }

    // for delete 
    function delete($id)
    {
        // return ["id"=>$id];
        
        $user = Member::find($id);
        $result =  $user->delete();
         if($result)
         {
            return ["Result"=>"success"];
         }
         else
         {
            return ["Result"=>"Failed"];
         }
        }

}