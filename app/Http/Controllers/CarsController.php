<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index(Request $request)
    {
        $brand = $request->query('brand');
        $per_page = $request->query('per_page', 5);

        $query = Car::query();

        $cars = $query->paginate($per_page);

        return response()->json($cars);

    }

    public function show(Car $car) {

        return response()->json($car);
    }

    public function store(CreateCarRequest $request)
    {
        $data = $request->validated();
        $car = Car::create($data);
        return response()->json($car);
    }

    public function update(UpdateCarRequest $request, Car $car) {
        $data = $request->validated();
        $car->update($data);

        return response()->json($car);
    }

    public function delete(Car $car) {
        $car->delete();

        return response(null, 204);
    }
}
