<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\UserScore;

class UserScoreController extends Controller
{
    public function index() {
        $userScores = UserScore::all();
        //order user scores by score
        $userScores = $userScores->sortByDesc('score');

        return view('dashboard', ['userScores' => $userScores]);
    }
}
