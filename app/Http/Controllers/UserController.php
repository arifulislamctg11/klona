<?php

namespace App\Http\Controllers;
use App\Providers\MembersHelperServiceProvider;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getUsers(){
        $users=DB::table("users")->latest()->get();
        return response()->json($users);
    }
    public function showSearchPage()
    {
        return view('pages.feed');
    }
    
    public function handleSearchRequest(Request $request)
    {
        $query = $request->input('query');
        $users = DB::table("users")->where("name","LIKE",$query."%")->get();
        $suggestions = MembersHelperServiceProvider::getSuggestedMembers();
        return view('pages.usersearch', ['users' => $users,'suggestions'=>$suggestions]);
    }
   
}
