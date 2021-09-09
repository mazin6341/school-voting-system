<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Vote;

class VoteController extends Controller
{
    function codeValidation(Request $req)
    {
        $req->validate([
            'voteCode'=>'required | max:6 | min:6'
        ]);
        $voteCode = $req->input('voteCode');
        if(DB::table('votes')->where('vote_code', '=', $voteCode)->exists()){
            return redirect()->back()->with('exists', 'code has been already used');
        }
        else{
            $fCharVoteCode = substr($voteCode, 0, 1);
            $parseData = [
                'votecode' => $voteCode,
                'fCharVoteCode' => $fCharVoteCode
            ];
            if($fCharVoteCode == "a"){
                return view('contvote')->with('parseData', $parseData);
            }else if($fCharVoteCode == "b"){
                return view('contvote')->with('parseData', $parseData);
            }else if($fCharVoteCode == "d"){
                return view('contvote')->with('parseData', $parseData);
            }else if($fCharVoteCode == "g"){
                return view('contvote')->with('parseData', $parseData);
            }else if($fCharVoteCode == "s"){
                return view('contvote')->with('parseData', $parseData);
            }else if($fCharVoteCode == "t"){
                return view('contvote')->with('parseData', $parseData);
            }else if($fCharVoteCode == "u"){
                return view('contvote')->with('parseData', $parseData);
            }else if($fCharVoteCode == "v"){
                return view('contvote')->with('parseData', $parseData);
            }else if($fCharVoteCode == "w"){
                return view('contvote')->with('parseData', $parseData);
            }else{
                return redirect()->back()->with('exists', 'code has been already used');
            }
            return view('contvote')->with('votecode', $voteCode);
        }
    }

    function completeVote(Request $req)
    {
        $voteCode = $req->input('voteCode');
        if(DB::table('votes')->where('vote_code', '=', $voteCode)->exists()){
            return view('welcome')->with('exists', 'code has been already used');
        }
        else{
            if($req->input('vote1') !== NULL){
                $vote1 = new Vote();
                $vote1->vote_code = $req->input('voteCode');
                $vote1->vote = $req->input('vote1');
                $vote1->save();
                return redirect()->route('home');
            }
        }
    }

    function schoolCaptainResult(){
        $data = DB::table('votes')->whereBetween('created_at', ['2021-09-08 11:30:00', '2021-09-08 12:03:00'])->get();
        $candidate1 = ($data->where('vote', 18))->count();
        $candidate2 = ($data->where('vote', 6))->count();
        $candidate3 = ($data->where('vote', 8))->count();
        $candidate4 = ($data->where('vote', 10))->count();
        $candidate5 = ($data->where('vote', 15))->count();
        $result = [
            'cand1' => $candidate1,
            'cand2' => $candidate2,
            'cand3' => $candidate3,
            'cand4' => $candidate4,
            'cand5' => $candidate5
        ];
        return view('schoolcap')->with('result', $result);
    }

    function depSchoolCaptainResult(){
        $data = DB::table('votes')->whereBetween('created_at', ['2021-09-08 12:05:00', '2021-09-08 12:30:00'])->get();
        $candidate1 = ($data->where('vote', 18))->count();
        $candidate2 = ($data->where('vote', 6))->count();
        $candidate3 = ($data->where('vote', 8))->count();
        $candidate4 = ($data->where('vote', 9))->count();
        $candidate5 = ($data->where('vote', 13))->count();
        $result = [
            'cand1' => $candidate1,
            'cand2' => $candidate2,
            'cand3' => $candidate3,
            'cand4' => $candidate4,
            'cand5' => $candidate5
        ];
        return view('depschoolcap')->with('result', $result);
    }

    function gamesCaptainResult(){
        $data = DB::table('votes')->whereBetween('created_at', ['2021-09-08 12:30:00', '2021-09-08 13:00:00'])->get();
        $candidate1 = ($data->where('vote', 7))->count();
        $candidate2 = ($data->where('vote', 16))->count();
        $result = [
            'cand1' => $candidate1,
            'cand2' => $candidate2
        ];
        return view('gamescap')->with('result', $result);
    }

    function depGamesCaptainResult(){
        $data = DB::table('votes')->whereBetween('created_at', ['2021-09-08 13:12:00', '2021-09-08 13:42:00'])->get();
        $candidate1 = ($data->where('vote', 16))->count();
        $candidate2 = ($data->where('vote', 11))->count();
        $candidate3 = ($data->where('vote', 2))->count();
        $candidate4 = ($data->where('vote', 19))->count();
        $candidate5 = ($data->where('vote', 1))->count();
        $candidate6 = ($data->where('vote', 17))->count();
        $candidate7 = ($data->where('vote', 5))->count();
        $result = [
            'cand1' => $candidate1,
            'cand2' => $candidate2,
            'cand3' => $candidate3,
            'cand4' => $candidate4,
            'cand5' => $candidate5,
            'cand6' => $candidate6,
            'cand7' => $candidate7
        ];
        return view('depgamescap')->with('result', $result);
    }

    function houseCaptainResult(){
        $data = DB::table('votes')->whereBetween('created_at', ['2021-09-08 13:45:00', '2021-09-08 14:00:00'])->get();

        $alphaCand1 = ($data->where('vote', 13))->count();
        $alphaCand2 = ($data->where('vote', 1))->count();
        $alphaCand3 = ($data->where('vote', 14))->count();

        $betaCand1 = ($data->where('vote', 18))->count();
        $betaCand2 = ($data->where('vote', 3))->count();

        $deltaCand1 = ($data->where('vote', 15))->count();
        $deltaCand2 = ($data->where('vote', 4))->count();

        $gammaCand1 = ($data->where('vote', 8))->count();
        $gammaCand2 = ($data->where('vote', 2))->count();
        $gammaCand3 = ($data->where('vote', 12))->count();

        $result = [
            'alphacand1' => $alphaCand1,
            'alphacand2' => $alphaCand2,
            'alphacand3' => $alphaCand3,
            'betacand1' => $betaCand1,
            'betacand2' => $betaCand2,
            'deltacand1' => $deltaCand1,
            'deltacand2' => $deltaCand2,
            'gammacand1' => $gammaCand1,
            'gammacand2' => $gammaCand2,
            'gammacand3' => $gammaCand3
        ];
        return view('housecaptains')->with('result', $result);
    }
}
