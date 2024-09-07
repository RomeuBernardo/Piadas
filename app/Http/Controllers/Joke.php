<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Joke extends Controller
{
    protected $jokes = [];
    protected $filePath = 'jokes.txt';

    public function __construct()
    {
        // Carregar as piadas  se existir
        if (File::exists($this->filePath)) {
            $json = File::get($this->filePath);
            $this->jokes = json_decode($json, true);
        } else {
            // Arquivo não existe, use piadas padrão
            $this->jokes = [
                [
                    'setup' => 'xccxvdcxv sdjxz fvsjzxv',
                    'punchline' => 'xzfsczxfsdzxfs'
                ],
                [
                    'setup' => 'nova piada',
                    'punchline' => 'xzfsczxfsdzxfs'
                ],
                [
                    'setup' => 'nova 1111',
                    'punchline' => '1111'
                ]
            ];

            $this->saveJokes();
        }
    }

    public function Jokes()
    {
        $jokes = $this->jokes;
        $numberRandom = array_rand($jokes);
        return response()->json([$jokes[$numberRandom]]);
    }

    public function create(Request $request)
    {
        $this->jokes[] = [
            'setup' => $request->setup,
            'punchline' => $request->punchline
        ];
        $this->saveJokes();
        return response()->json($this->jokes);
    }

    protected function saveJokes()
    {
        File::put($this->filePath, json_encode($this->jokes));
    }

    
}
