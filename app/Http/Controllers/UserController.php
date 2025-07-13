<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\IsianKuesioner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function user_get()
    {
        $user = User::find(session('user_id'));

        return view('index', [
            'user' => $user,
        ]);
    }
    
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

            Session::put('user_id', $user->id);
            
            $belumIsianStatusKepuasan = IsianKuesioner::where('user_id', $user->id)
                                                ->where('status_kepuasan', 0)  
                                                ->first();
            if ($belumIsianStatusKepuasan) {
                return redirect('/kepuasan');
            }
            
            $belumIsianStatusPerasaan = IsianKuesioner::where('user_id', $user->id)
                                                ->where('status_perasaan', 0)  
                                                ->first();
            if ($belumIsianStatusPerasaan) {
                return redirect('/perasaan');
            }

            $belumIsianStatusMaknaHidup = IsianKuesioner::where('user_id', $user->id)
                                                ->where('status_makna', 0)  
                                                ->first();
            if ($belumIsianStatusMaknaHidup) {
                return redirect('/makna');
            }

            $belumIsianStatusKebahagiaan = IsianKuesioner::where('user_id', $user->id)
                                                ->where('status_kebahagiaan', 0)  
                                                ->first();
            if ($belumIsianStatusKebahagiaan) {
                return redirect('/kebahagiaan');
            }

            if (!$belumIsianStatusKepuasan && !$belumIsianStatusPerasaan && !$belumIsianStatusMaknaHidup && !$belumIsianStatusKebahagiaan) {
                $newIsianKuesioner = new IsianKuesioner();
                $newIsianKuesioner->user_id = $user->id;
                $newIsianKuesioner->save();
            }

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

            Session::put('user_id', $newUserRecord->id);
            
            $belumIsianStatusKepuasan = IsianKuesioner::where('user_id', $newUserRecord->id)
                                                ->where('status_kepuasan', 0)  
                                                ->first();
            if ($belumIsianStatusKepuasan) {
                return redirect('/kepuasan');
            }
            
            $belumIsianStatusPerasaan = IsianKuesioner::where('user_id', $newUserRecord->id)
                                                ->where('status_perasaan', 0)  
                                                ->first();
            if ($belumIsianStatusPerasaan) {
                return redirect('/perasaan');
            }

            $belumIsianStatusMaknaHidup = IsianKuesioner::where('user_id', $newUserRecord->id)
                                                ->where('status_makna', 0)  
                                                ->first();
            if ($belumIsianStatusMaknaHidup) {
                return redirect('/makna');
            }

            $belumIsianStatusKebahagiaan = IsianKuesioner::where('user_id', $newUserRecord->id)
                                                ->where('status_kebahagiaan', 0)  
                                                ->first();
            if ($belumIsianStatusKebahagiaan) {
                return redirect('/kebahagiaan');
            }

            if (!$belumIsianStatusKepuasan && !$belumIsianStatusPerasaan && !$belumIsianStatusMaknaHidup && !$belumIsianStatusKebahagiaan) {
                $newIsianKuesioner = new IsianKuesioner();
                $newIsianKuesioner->user_id = $newUserRecord->id;
                $newIsianKuesioner->save();
            }

            return redirect('/kepuasan');
        }
    }
}