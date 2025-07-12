<?php

namespace App\Http\Controllers;

use App\Models\IsianKuesioner;
use Illuminate\Http\Request;

class IsianKuesionerController extends Controller
{
    public function kepuasan_store(Request $request) 
    {
        $isianKuesioner = IsianKuesioner::where('user_id', $request->user_id)
                                                ->where('status_kepuasan', 0)  
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
    
    public function perasaan_store(Request $request) 
    {
        $isianKuesioner = IsianKuesioner::where('user_id', $request->user_id)
                                                ->where('status_perasaan', 0)  
                                                ->first();
        $isianKuesioner->status_perasaan = 1;
        $isianKuesioner->perasaan_q1 = $request->perasaan_q1;
        $isianKuesioner->perasaan_q2 = $request->perasaan_q2;
        $isianKuesioner->perasaan_q3 = $request->perasaan_q3;
        $isianKuesioner->save();

        return redirect('/makna');
    }
    
    public function makna_store(Request $request) 
    {
        $isianKuesioner = IsianKuesioner::where('user_id', $request->user_id)
                                                ->where('status_makna', 0)  
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
    
    public function kebahagiaan_store(Request $request) 
    {
        $isianKuesioner = IsianKuesioner::where('user_id', $request->user_id)
                                                ->where('status_kebahagiaan', 0)  
                                                ->first();
        $isianKuesioner->status_kebahagiaan = 1;
        $isianKuesioner->kebahagiaan_q1 = $request->kebahagiaan_q1;
        $isianKuesioner->save();

        return redirect('/');
    }
}