<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Joke extends Controller {
    protected $jokes = [];
    public function __construct()
    {
        $this->jokes = [
            [
            'setup'=>'xccxvdcxv sdjxz fvsjzxv',
            'punchuline'=>'xzfsczxfsdzxfs'
            ],
            [
                'setup'=>'nova piada',
                'punchuline'=>'xzfsczxfsdzxfs'
            ], [
                'setup'=>'nova 1111',
                'punchuline'=>'1111'
            ]
            ];
    }
    public function Jokes(){
        $jokes = $this->jokes;
        $numberRandon = array_rand($jokes);
        return response()->json([$jokes[$numberRandon]]);
    }
    public function create(Request $request){
        $this->jokes[] = ['setup'=>$request->setup,'punchiline'=>$request->punchuline];
        return $this->jokes;
    }

}
