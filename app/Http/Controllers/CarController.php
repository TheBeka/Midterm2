<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function all()
    {
        $cars = Car::all();
        return $cars;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Cars.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'car_name' => 'required',
            'car_price' => 'required',
            'car_owner_id' => 'required'
        ]);

        Car::create(array(
            'car_name' => $request->input('car_name'),
            'car_price' => $request->input('car_price'),
            'car_owner_id' => $request->input('car_owner_id')
        ));

        return redirect('cars/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::all()->where('id', $id)->first();
        return view('Cars.edit')->with('car', $car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'car_name' => 'required',
            'car_price' => 'required',
            'car_owner_id' => 'required'
        ]);

        Car::where('id', $id)->update(array(
            'car_name' => $request->input('car_name'),
            'car_price' => $request->input('car_price'),
            'car_owner_id' => $request->input('car_owner_id')
        ));

        return redirect('cars/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::where('id', $id)->delete();
        return redirect('cars/index');
    }
}
