<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Member;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function hiscore() {
        $cast = "CAST(total_xp AS INT) DESC";

        $hiscores = DB::table('members')
            ->select('username', 'rank', 'total_level', 'total_xp', 'hiscore_rank', 'private', 'rank_id', 'rank_title')
            ->join('rank', 'members.rank', '=', 'rank.rank_title')
            ->orderBy('total_level', 'DESC')
            ->orderByRaw($cast)
            ->orderBy('hiscore_rank')
            ->get();

        return view('hiscore', compact('hiscores'));
    }

    public function members() {
        $members = DB::table('members')
            ->select('username', 'rank', 'xp', 'kills')
            ->join('rank', 'members.rank', '=', 'rank.rank_title')
            ->orderBy('rank_id', 'DESC')
            ->get();

        return view('members', compact('members'));
    }

    public function about() {
        return view('about');
    }

    public function updateLog() {
        $updateLogs = Member::orderBy('updated_at', 'DESC')->whereColumn('updated_at', '>', 'created_at')->get();

        return view('update-log', compact('updateLogs'));
    }
}