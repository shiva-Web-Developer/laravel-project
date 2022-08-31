<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

use Illuminate\Support\Facades\DB;


class Membercontroller extends Controller
{
 
// SAVE DATA     
    function getadd(Request $request)
    {
            $user = new Member;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();
            return redirect('login');
    }

// LOGIN VIEW    
    function login()
    {
            return view('login');
    }

// LOGIN QUERY     
     function logindata(Request $request)
     {
        //  return $request->input();
        //  die();

        // SET DATA IN SESSION 
        $dbemail = $request->input('email');
        $request->session()->put('user',$dbemail);
        // $r = session('user');

        $login = DB::table('members')
                ->where('email', $request->email)
                ->where('password',$request->password)
                ->first();

        if($login==true)
        {
            return redirect('view'); 
        } 
        else
        {
            return redirect('login'); 
        }                       
     }

// LIST VIEW     
    function view()
    {
        $ddd= session('user');

        if($ddd =="")
        {
            return redirect('login'); 
        }
        else
        {
            $fetch= Member::get();
            return view('view')->with(['hello'=>$fetch]); 
        }  
    }

// EDIT VIEW     
    function editview($id)
    {
        $ddd= session('user');

        if($ddd =="")
        {
            return redirect('login'); 
        }
        else
        {
            $fetch= Member::find($id);
            return view('edit_view')->with(['hello'=>$fetch]);   
        } 
    }

// UPDATE QUERY 
function update(Request $request)
    {
        $id = $request->id;
        $user = Member::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('view');  
    }    

// DELETE DATA 
function delete($id)
{
        $fetch= Member::find($id);
        $fetch->delete();
        return redirect('view');      
}

// LOGOUT DATA 
function logout(Request $request)
{
        session('user');
        $request->session()->forget('user');
        return redirect('login'); 
}

}
