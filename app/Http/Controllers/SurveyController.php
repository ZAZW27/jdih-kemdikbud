<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurveyKepuasan;

class SurveyController extends Controller
{
    public function showSurvey(){
        return view('pages.survey.hasil_survey', [
            'title' => 'JDIH KEMDIKBUD| Survey',
        ]);
    }
    public function submitSurvey(Request $request)
    {
        $validate = $request->validate([
            'kepuasan_ui' => 'required|string|in:Sangat Setuju,Setuju,Kurang Setuju,Tidak Setuju',
            'search_ux' => 'required|string|in:Sangat Setuju,Setuju,Kurang Setuju,Tidak Setuju',
            'kelengkapan_doc' => 'required|string|in:Sangat Setuju,Setuju,Kurang Setuju,Tidak Setuju',
            'validate_doc' => 'required|string|in:Sangat Setuju,Setuju,Kurang Setuju,Tidak Setuju',
        ]);

        $survey = new SurveyKepuasan([
            'ui_survey' => $validate['kepuasan_ui'], 
            'ux_search_survey' => $validate['search_ux'], 
            'kelengkapan_dokumen' => $validate['kelengkapan_doc'], 
            'validasi_hukum_dokumen' => $validate['validate_doc'], 
        ]);

        $survey->save();


        // SurveyKepuasan::create([
        //     'kepuasan_ui' => $request->input('kepuasan_ui'),
        //     'search_ux' => $request->input('search_ux'),
        //     'kelengkapan_doc' => $request->input('kelengkapan_doc'),
        //     'validate_doc' => $request->input('validate_doc'),
        // ]);

        return redirect()->route('survey');
    }
}
