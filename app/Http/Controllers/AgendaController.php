<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function contato(){
        return view ('site.agenda');
    }
}
