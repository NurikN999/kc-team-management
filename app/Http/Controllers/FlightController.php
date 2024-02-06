<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFlightRequest;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightsController extends Controller
{

    public function index()
    {
        return Flight::all();
    }

    public function store(StoreFlightRequest $request)
    {
        $flight = Flight::create($request->all());

        return $flight;
    }

    public function show($id)
    {
        return Flight::find($id);
    }

}
