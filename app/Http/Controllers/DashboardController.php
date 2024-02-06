<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            ['text' => 'Dashboard', 'url' => '/'],
        ];

        return view('dashboard', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
