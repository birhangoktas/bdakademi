<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserRouteController extends Controller
{
    public function dash_get(){
        $packetlisting = DB::table('educationpackets')->get();
        return view('user.welcome',['packetlisting' => $packetlisting]);
    }

    public function video_get($id){
        $educationtitle = DB::table('educationtitles')->where('packet_id', $id)->get();
        $mentorarray = DB::table('educationtitles')->where('packet_id', $id)->pluck('id')->toArray();
        $arraylist = DB::table('educationvideos')->whereIn('title_id', $mentorarray)->get();
        return view('user.video',['educationtitle' => $educationtitle,'arraylist' => $arraylist]);
    }
}
