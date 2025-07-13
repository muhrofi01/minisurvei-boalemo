<?php

namespace App\Http\Controllers;

use App\Models\IsianKuesioner;
use Illuminate\Http\Request;

class IsianKuesionerController extends Controller
{
    public function kepuasan_get() 
    {
        $isian_kuesioner = IsianKuesioner::where('user_id', session('user_id'))
                                        ->latest('created_at')
                                        ->first();
        return view('kepuasan', [
            'isian_kuesioner' => $isian_kuesioner,
        ]);
    }

    public function kepuasan_store(Request $request) 
    {
        $isianKuesioner = IsianKuesioner::where('user_id', session('user_id'))
                                        ->latest('created_at')
                                        ->first();
                                        
        $isianKuesioner->status_kepuasan = 1;
        $isianKuesioner->kepuasan_q1 = $request->kepuasan_q1;
        $isianKuesioner->kepuasan_q2 = $request->kepuasan_q2;
        $isianKuesioner->kepuasan_q3 = $request->kepuasan_q3;
        $isianKuesioner->kepuasan_q4 = $request->kepuasan_q4;
        $isianKuesioner->kepuasan_q5 = $request->kepuasan_q5;
        $isianKuesioner->kepuasan_q6 = $request->kepuasan_q6;
        $isianKuesioner->kepuasan_q7 = $request->kepuasan_q7;
        $isianKuesioner->kepuasan_q8 = $request->kepuasan_q8;
        $isianKuesioner->kepuasan_q9 = $request->kepuasan_q9;
        $isianKuesioner->kepuasan_q10 = $request->kepuasan_q10;
        $isianKuesioner->save();

        return redirect('/perasaan');
    }

    public function perasaan_get() 
    {
        $isian_kuesioner = IsianKuesioner::where('user_id', session('user_id'))
                                        ->latest('created_at')
                                        ->first();
        return view('perasaan', [
            'isian_kuesioner' => $isian_kuesioner,
        ]);
    }
    
    public function perasaan_store(Request $request) 
    {
        $isianKuesioner = IsianKuesioner::where('user_id', session('user_id'))
                                        ->latest('created_at')
                                        ->first();
                                        
        $isianKuesioner->status_perasaan = 1;
        $isianKuesioner->perasaan_q1 = $request->perasaan_q1;
        $isianKuesioner->perasaan_q2 = $request->perasaan_q2;
        $isianKuesioner->perasaan_q3 = $request->perasaan_q3;
        $isianKuesioner->save();

        return redirect('/makna');
    }

    public function makna_get() 
    {
        $isian_kuesioner = IsianKuesioner::where('user_id', session('user_id'))
                                        ->latest('created_at')
                                        ->first();
        return view('makna', [
            'isian_kuesioner' => $isian_kuesioner,
        ]);
    }
    
    public function makna_store(Request $request) 
    {
        $isianKuesioner = IsianKuesioner::where('user_id', session('user_id'))
                                        ->latest('created_at')
                                        ->first();
        $isianKuesioner->status_makna = 1;
        $isianKuesioner->makna_q1 = $request->makna_q1;
        $isianKuesioner->makna_q2 = $request->makna_q2;
        $isianKuesioner->makna_q3 = $request->makna_q3;
        $isianKuesioner->makna_q4 = $request->makna_q4;
        $isianKuesioner->makna_q5 = $request->makna_q5;
        $isianKuesioner->makna_q6 = $request->makna_q6;
        $isianKuesioner->save();

        return redirect('/kebahagiaan');
    }

    public function kebahagiaan_get() 
    {
        $isian_kuesioner = IsianKuesioner::where('user_id', session('user_id'))
                                        ->latest('created_at')
                                        ->first();
        return view('kebahagiaan', [
            'isian_kuesioner' => $isian_kuesioner,
        ]);
    }
    
    public function kebahagiaan_store(Request $request) 
    {
        $isianKuesioner = IsianKuesioner::where('user_id', session('user_id'))
                                        ->latest('created_at')
                                        ->first();
        $isianKuesioner->status_kebahagiaan = 1;
        $isianKuesioner->kebahagiaan_q1 = $request->kebahagiaan_q1;
        $isianKuesioner->save();

        return redirect("/skor-hasil/$request->user_id");
    }

    public function skor_hasil($user_id) 
    {
        $isianKuesioner = IsianKuesioner::where('user_id', $user_id)
                                        ->latest('created_at')
                                        ->first();

        
        $total_kepuasan_hidup = 0;
        $total_perasaan = 0;
        $total_makna_hidup = 0;
        
        $total_kepuasan_hidup = $isianKuesioner->kepuasan_q1 +
                                $isianKuesioner->kepuasan_q2 +
                                $isianKuesioner->kepuasan_q3 +
                                $isianKuesioner->kepuasan_q4 +
                                $isianKuesioner->kepuasan_q5 +
                                $isianKuesioner->kepuasan_q6 +
                                $isianKuesioner->kepuasan_q7 +
                                $isianKuesioner->kepuasan_q8 +
                                $isianKuesioner->kepuasan_q9 +
                                $isianKuesioner->kepuasan_q10;
        
        $total_perasaan     =   $isianKuesioner->perasaan_q1 +
                                $isianKuesioner->perasaan_q2 +
                                $isianKuesioner->perasaan_q3;
        
        $total_makna_hidup  =   $isianKuesioner->makna_q1 +
                                $isianKuesioner->makna_q2 +
                                $isianKuesioner->makna_q3 +
                                $isianKuesioner->makna_q4 +
                                $isianKuesioner->makna_q5 +
                                $isianKuesioner->makna_q6;

        $nilai_kepuasan_hidup = $total_kepuasan_hidup / 10;
        $nilai_perasaan = $total_perasaan / 3;
        $nilai_makna_hidup = $total_makna_hidup / 6;

        $indeks_kebahagiaan = ((($nilai_kepuasan_hidup + $nilai_perasaan + $nilai_makna_hidup) / 3) + $isianKuesioner->kebahagiaan_q1) / 2;

        if ($indeks_kebahagiaan == 10) {
            $teks_penjelas = "Selamat... Anda telah menjalani hidup dengan penuh arti, mampu merasakan kebahagiaan dari apa yang ada, bukan terus mengejar yang belum dimiliki.";
        } elseif ($indeks_kebahagiaan > 8 && $indeks_kebahagiaan < 10) {
            $teks_penjelas = "Jika hidup memberimu seratus alasan untuk bersedih, buktikan bahwa kamu memiliki ribuan alasan untuk tetap bahagia.";
        } elseif ($indeks_kebahagiaan > 5 && $indeks_kebahagiaan <= 8) {
            $teks_penjelas = "Jadikan hati kita selalu damai agar kita bisa membahagiakan diri kita sendiri serta membahagiakan sesama.";
        } else {
            $teks_penjelas = "Jangan pernah meragukan kemampuan dirimu sendiri, karena sesungguhnya kamu lebih hebat dari yang kamu kira.";
        }

        return view('skor-hasil', [
            "nilai_kepuasan_hidup" => number_format($nilai_kepuasan_hidup, 2, ',', ''),
            "nilai_perasaan" =>  number_format($nilai_perasaan, 2, ',', ''),
            "nilai_makna_hidup" =>  number_format($nilai_makna_hidup, 2, ',', ''),
            "indeks_kebahagiaan" =>  number_format($indeks_kebahagiaan, 2, ',', ''),
            "teks_penjelas" => $teks_penjelas,
        ]);
    }
}