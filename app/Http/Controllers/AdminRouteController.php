<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// Modeller
use App\Models\Educationpacket;
use App\Models\Admin;
use App\Models\Educationtest;
use App\Models\Educationtitle;
use App\Models\Educationvideo;

class AdminRouteController extends Controller
{



    // =============================================================================


    public function admindash()
    {
        $packet = DB::table('educationpackets')->get();
        return view('teacher.dash.index', ['packet' => $packet]);
    }

    public function packetlist()
    {
        $packet = DB::table('educationpackets')->get();
        return view('teacher.packet.list', ['packet' => $packet]);
    }

    public function packettitle($id)
    {
        $packetcount = DB::table('educationpackets')->where('packet_id', $id)->get();
        if (count($packetcount) == 1) {
            $educationtitle = DB::table('educationtitles')->where('packet_id', $id)->get();

            return view('teacher.packet.title', ['packetcount' => count($packetcount), 'educationtitle' => $educationtitle]);
        } else {
            echo 'düştük yollara';
        }
    }

    public function packettitlesave(Request $request, $id)
    {


        $educationname = $request->educationtitle;
        $student_name = $request->order;

        foreach ($educationname as $key => $no) {

            $educationcourse = new Educationtitle();
            $educationcourse->packet_id = $id;
            $educationcourse->order = $student_name[$key];
            $educationcourse->title_name = $no;
            $educationcourse->save();
        }
        return back();
    }

    public function videosend($id)
    {
        $titlecount = DB::table('educationtitles')->where('id', $id)->get();
        $educationvideo = DB::table('educationvideos')->where('title_id', $id)->get();
        if (count($titlecount) == 1) {
            return view('teacher.packet.videosend', ['titlecount' => $id, 'educationvideo' => $educationvideo]);
        }
    }

    public function videosendpost(Request $request, $id)
    {
        $lint = $request->file('educationvideo');


        $educationname = $request->educationname;
        $student_name = $request->educationvideo;

        foreach ($educationname as $key => $no) {

            $getID3 = new \getID3;
            $file = $getID3->analyze($lint[$key]->getPathname());
            $duration = date('i:s', $file['playtime_seconds']);

            $new_course = rand() . '.' . $student_name[$key]->getClientOriginalExtension();
            $student_name[$key]->move(public_path('educationcourse'), $new_course);

            $educationvideo = new Educationvideo();
            $educationvideo->title_id = $id;

            $educationvideo->video_name = $no;
            $educationvideo->video_path = $new_course;
            $educationvideo->video_time = $duration;
            $educationvideo->save();
        }

        return back();
    }

    public function test_get($id)
    {
        return view('teacher.packet.test', ['id' => $id]);
    }

    public function test_post(Request $request, $id)
    {

        $educationtest = new Educationtest();
        $educationtest->video_id = $id;
        $educationtest->degree = $request->input('degree');
        $educationtest->question = $request->input('question');
        $educationtest->answer_a = $request->input('answer_a');
        $educationtest->answer_b = $request->input('answer_b');
        $educationtest->answer_c = $request->input('answer_c');
        $educationtest->answer_d = $request->input('answer_d');
        $educationtest->success_answer = $request->input('success_answer');
        $educationtest->save();

        return back();
    }


    public function videowatch($id)
    {
        $educationtitle = DB::table('educationtitles')->where('packet_id', $id)->get();
        $mentorarray = DB::table('educationtitles')->where('packet_id', $id)->pluck('id')->toArray();
        $arraylist = DB::table('educationvideos')->whereIn('title_id', $mentorarray)->get();


        return view('teacher.dash.watch',['educationtitle' => $educationtitle,'arraylist' => $arraylist]);
    }
}
