<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurveyKepuasan;
use Illuminate\Support\Facades\DB;

class SurveyController extends Controller
{
    public function showSurvey(){
        // $survey = DB::table('survey_pengunjung')->select('topic', 'rate', DB::raw('COUNT(*) as count'))->groupBy('topic', 'rate')->get();

        $survery_ui = DB::table('survey_pengunjung')
                        ->select('topic', 'rate', DB::raw('COUNT(*) as count'))
                        ->where('topic', 'survey UI')
                        ->groupBy('topic', 'rate')
                        ->get();

        $search_ux = DB::table('survey_pengunjung')
                        ->select('topic', 'rate', DB::raw('COUNT(*) as count'))
                        ->where('topic', 'search UX survey')
                        ->groupBy('topic', 'rate')
                        ->get();

        $klngpn_doc = DB::table('survey_pengunjung')
                        ->select('topic', 'rate', DB::raw('COUNT(*) as count'))
                        ->where('topic', 'kelengkapan dokumen')
                        ->groupBy('topic', 'rate')
                        ->get();

        $valid_doc = DB::table('survey_pengunjung')
                        ->select('topic', 'rate', DB::raw('COUNT(*) as count'))
                        ->where('topic', 'validasi dokumen/hukum')
                        ->groupBy('topic', 'rate')
                        ->get();

        return view('pages.survey.hasil_survey', [
            'title' => 'JDIH KEMDIKBUD| Survey',
            'survey_ui' => $survery_ui,
            'search_ux' => $search_ux,
            'klngkpn_doc' => $klngpn_doc,
            'valid_doc' => $valid_doc,
        ]);
    }
    public function submitSurvey(Request $request)
    {
        foreach ($request->input('topic') as $key => $topic) {
            SurveyKepuasan::create([
                'topic' => $topic,
                'rate' => $request->input("rate.$key"),
            ]);
        }

        return redirect()->route('show_survey.data'); // Replace 'survey.thankyou' with your actual thank you page
    }
}
