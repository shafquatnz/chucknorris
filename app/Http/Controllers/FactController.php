<?php

namespace App\Http\Controllers;
use App\Models\Fact;

class FactController extends Controller
{
    public function show()
    {
        $fact = Fact::inRandomOrder()->limit(1)->get();
        return view('fact', [
            'thing' => $fact[0]->fact
        ]);
    }
}
