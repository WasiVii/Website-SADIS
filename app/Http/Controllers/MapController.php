<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $initialMarkers = [
            [
                'position' => [
                    'lat' => -6.17516,
                    'lng' => 106.82740
                ],
                'draggable' => true
            ]
        ];
        return view('layouts.peta_sekolah', compact('initialMarkers'));
    }
}
