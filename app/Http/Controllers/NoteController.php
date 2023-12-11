<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class NoteController extends Controller
{
    //note list page
    public function listPage(){
        return view('note.index');
    }
}
