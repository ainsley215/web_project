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

    public function getPen($id) {
        $pendidikan = Pendidikan::find($id);
        if (!$pendidikan) {
            return Response::json([
                'status' => 'error',
                'message' => 'Data not found'
            ], 404);
        }
        return Response::json($pendidikan);
    }

    public function createPen(Request $request) {
        $pendidikan = Pendidikan::create($request->all());
        return Response::json([
            'status' => 'ok',
            'message' => 'Pendidikan created'
        ], 201);
    }

    public function updatePen($id, Request $request) {
        Pendidikan::find($id)->update($request->all());
        return Response::json([
            'status' => 'ok',
            'message' => 'Pendidikan updated'
        ], 201);
    }

    public function deletePen($id) {
        Pendidikan::destroy($id);
        return Response::json([
            'status' => 'ok',
            'message' => 'Pendidikan deleted'
        ], 201);
    }
}
