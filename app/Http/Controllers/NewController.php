<?php

namespace App\Http\Controllers;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use function GuzzleHttp\Promise\all;

class NewController extends Controller
{
    public function index()
    {
        return view('Layout.fixe-page');
    }


    public function anasayfa()
    {
        return view('user.index');
    }


    public function createView()
    {
        return view('user.register');
    }


    public function create(Request $request)
    {
        $data = $request->all();
        $password = $request->get('password');

        DB::table('users')->insert([
            'name' => $request->get('name'),
            'last_name'=>$request->get('last_name'),
            'email' => $request->get('email'),
            'password' => Hash::make($password)
            ]);
        return view('user.flash-kayit');
    }


    public function listView()
    {

        $users= User::where('deleted_at','=',null)->get();
        return view('user.List',compact('users'));
    }


    public function islem(Request $request)
    {
        $users= User::where('deleted_at','=',null)->get();
        return view('user.islem',compact('users'));
    }


    public function updateView($id)
    {
        $user = User::where('id',$id)->get();
        $user = $user->first();
        return view('user.update',compact('user'));

    }


    public function update(Request $request, $id)
    {
        $user = User::where('id',$id)->update([
            'name'=>$request->get('name'),
            'last_name'=>$request->get('last_name'),
            'email'=>$request->get('email'),
            'updated_at'=>Carbon::now()
        ]);
        return view('user.flash-kayit',compact('user'));
    }


    public function delete($id)
    {
        DB::table('users')->where('id','=',$id)->update([
            'deleted_at'=>Carbon::now()
        ]);
        return view('user.flash-kayit');
    }

}
