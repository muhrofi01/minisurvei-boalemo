<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store_user(StoreUserRequest $request) {
        $request->validated();
        

        $user = User::select('id')->where('email', $request->no_hp)->first();

        if ($user) {
            $user->email = $request->email;
            $user->nama = $request->nama;
            $user->jenis_kelamin = $request->jenis_kelamin;
            $user->umur = $request->umur;
            $user->status_perkawinan = $request->status_perkawinan;
            $user->pendidikan_tertinggi = $request->pendidikan_tertinggi;
            $user->nomor_hp = $request->nomor_hp;
            
            $user->save();
        } else {
            $newUserRecord = new User();
            $newUserRecord->email = $request->email;
            $newUserRecord->nama = $request->nama;
            $newUserRecord->jenis_kelamin = $request->jenis_kelamin;
            $newUserRecord->umur = $request->umur;
            $newUserRecord->status_perkawinan = $request->status_perkawinan;
            $newUserRecord->pendidikan_tertinggi = $request->pendidikan_tertinggi;
            $newUserRecord->nomor_hp = $request->nomor_hp;
            
            $newUserRecord->save();
        }
    }
}