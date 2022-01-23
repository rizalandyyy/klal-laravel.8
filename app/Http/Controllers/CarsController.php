<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Http\Requests\CreateValidationRequest;

class CarsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index','show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $cars = Car::all();
        $cars = Car::all()->toArray();
        // $cars = Car::all()->toJson();
        // $cars = json_decode($cars);
        var_dump($cars);
        // $cars = Car::where('name', '=', 'Tesla');
        // ->firstOrFail();
        // print_r(Car::sum('founded'));
        // dd($cars);
        return view('cars.index', [
            'cars' => $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validated();

        //Methods we can use on request -> $test = $request->file('image')->getExtension()
        //guesExtension()
        //getMimeType()
        //store()
        //asStore()
        //storePublicly()
        //move()
        //getClientOriginalName()
        //getClientMimeType()
        //guessClientExtension()
        //getSize()
        //getError()
        //isValid()

        $request->validate([
            'name' => 'required',
            'founded' => 'required|integer|min:0|max:2021',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = time() . '-' . $request->file('image')->getClientOriginalName();
        // dd($newImageName);

        $request->image->move(public_path('images'), $newImageName);

        $car = Car::create([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description' => $request->input('description'),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect(route('cars.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        // var_dump($car->products);
        // dd($car->engines);
        // dd($car->productionDate);
        return view('cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        // dd($car);
        return view('cars.edit')->with('car', $car);
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
        // $request->validated();

         $request->validate([
            'name' => 'required',
            'founded' => 'required|integer|min:0|max:2021',
            'description' => 'required',
        ]);

        $car = Car::where('id', $id)
        ->update([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description' => $request->input('description'),
        ]);

        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        // dd($id);
        // $car = Car::find($id);
        $car->delete();
        return redirect('/cars');
    }
}
