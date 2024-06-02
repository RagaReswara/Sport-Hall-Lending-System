<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Dd;

class UserController extends Controller
{
    public function registerAkun(Request $request) 
    {
        $user = User::create([
            'email' => $request -> email,
            'password' => bcrypt($request -> password),
            'nama_pj' => $request -> nama_pj,
            'namaOrganisasi' => $request -> namaOrganisasi,
            'no_telp' => $request -> no_telp,
            'fakultas' => $request -> fakultas,
            'prodi' => $request -> prodi,
            'role' => $request -> role,
            'plain_pw' => $request -> password
        ]);
        return response()->json(['is_success'=> true,'data' => $user]);
        
    }

    public function login(Request $request)
    {
        $credential = $request -> only('email' , 'password');

        if(Auth::attempt($credential))
        {
            $user = Auth::user();
            if($user -> role === 'Admin')
            {
                return redirect() -> route('jadwalBiro3');
            }
            else{
                return redirect() ->route('peminjam');
            }
        }
    }

    public function getUser(){
        $form = User::all();
        return response()->json(['is_success'=> true,'data' => $form]);
    }

    public function updateUser(Request $request) 
    {
        $getUser = User::find($request -> id_user);
        $updateUser = [
            'email',
            'password',
            'namaOrganisasi',
            'no_telp',
            'nama_pj',
            'fakultas',
            'prodi',
            'role',
            'plain_pw'
        ];
        
        foreach($updateUser as $update){
            if($request -> has($update)){
                $getUser -> $update = $request -> input($update);
            }
        }
        $getUser -> save();
        return response()->json(['is_success'=> true,'data' => $getUser]);
        
    }

}
