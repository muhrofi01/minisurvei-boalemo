<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\IsianKuesioner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function user_store(StoreUserRequest $request) 
    {
        $request->validated();
        

        $user = User::select('id')->where('email', $request->email)->first();

        if ($user) {
            $user->email = $request->email;
            $user->nama = $request->nama;
            $user->jenis_kelamin = $request->jenis_kelamin;
            $user->umur = $request->umur;
            $user->status_perkawinan = $request->status_perkawinan;
            $user->pendidikan_tertinggi = $request->pendidikan_tertinggi;
            $user->nomor_hp = $request->nomor_hp;
            $user->save();

            $isianKuesioner = IsianKuesioner::where('user_id', $user->id)
                                                ->where('status_kepuasan', '!=', 1)
                                                ->where('status_perasaan', '!=', 1)
                                                ->where('status_makna', '!=', 1)
                                                ->where('status_kebahagiaan', '!=', 1)  
                                                ->first();

            if (!$isianKuesioner) {
                $newIsianKuesioner = new IsianKuesioner();
                $newIsianKuesioner->user_id = $user->id;
                $newIsianKuesioner->save();
            }

            Session::put('user_id', $user->id);

            return redirect('/kepuasan');
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

            $isianKuesioner = IsianKuesioner::where('user_id', $newUserRecord->id)
                                                ->where('status_kepuasan', '!=', 1)
                                                ->where('status_perasaan', '!=', 1)
                                                ->where('status_makna', '!=', 1)
                                                ->where('status_kebahagiaan', '!=', 1)  
                                                ->first();

            if (!$isianKuesioner) {
                $newIsianKuesioner = new IsianKuesioner();
                $newIsianKuesioner->user_id = $newUserRecord->id;
                $newIsianKuesioner->save();
            }

            Session::put('user_id', $newUserRecord->id);

            return redirect('/kepuasan');
        }
    }
}