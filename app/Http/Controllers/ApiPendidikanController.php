<?php

namespace App\Http\Controllers;

use App\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class ApiPendidikanController extends Controller
{
    public function getAll() {
        $pendidikan = Pendidikan::all();
        return Response::json($pendidikan);
    }
}
