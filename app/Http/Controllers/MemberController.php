<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Member;

class MemberController extends Controller
{
    public function show($username) {
        $profile = Member::where('username', $username)->first();

        $skills = ["attack","defence","strength","constitution","ranged","prayer","magic","cooking","woodcutting","fletching","fishing","firemaking","crafting","smithing","mining","herblore","agility","thieving","slayer","farming","runecrafting","hunter","construction","summoning","dungeoneering","divination","invention"];

        $stats = [];

        foreach ($skills as $skillName) {
            array_push($stats, DB::table($skillName)->where('username', $username)->get());
        }

        return view('member.show', compact('profile', 'stats', 'skills'));
    }

    public function edit($id) {
        $profile = Member::find($id);

        return view('member.edit'. compact('profile'));
    }
}