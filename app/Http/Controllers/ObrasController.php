<?php

namespace App\Http\Controllers;

use App\Helpers\Obras;
use Illuminate\Http\Request;

class ObrasController extends Controller
{
    public function index(){
        $datos = Obras::getDatos();
        return view('Obras.index', ['datos' => $datos]);
    }
}
