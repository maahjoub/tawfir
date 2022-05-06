<?php

namespace App\Http\Controllers;

use App\Models\Car_line;
use App\Http\Requests\StoreCar_lineRequest;
use App\Http\Requests\UpdateCar_lineRequest;

class CarLineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCar_lineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCar_lineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car_line  $car_line
     * @return \Illuminate\Http\Response
     */
    public function show(Car_line $car_line)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car_line  $car_line
     * @return \Illuminate\Http\Response
     */
    public function edit(Car_line $car_line)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCar_lineRequest  $request
     * @param  \App\Models\Car_line  $car_line
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCar_lineRequest $request, Car_line $car_line)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car_line  $car_line
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car_line $car_line)
    {
        //
    }
}
