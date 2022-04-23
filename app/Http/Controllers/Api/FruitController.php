<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFruitRequest;
use App\Http\Resources\FruitResource;
use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fruits = Fruit::all();
        return FruitResource::collection($fruits);

        /*return response()->json([
            'status' => true,
            'fruits' => $fruits
        ]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
        //
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFruitRequest $request)
    {
        //$validated = $request->validated();
        $fruit = Fruit::create($request->validated());
        //$fruit = Fruit::create($request->all());
        return new FruitResource($fruit);

        /*$fruit = Fruit::create($request->all());
        return response()->json([
            'status' => true,
            'message' => "Post Created successfully!",
            'fruit' => $fruit
        ], 200);*/

        // using gates
        /*if (! Gate::allows('update-post', $post)) {
            abort(403);
        }*/

        //using policies
        /*if ($request->user()->cannot('update', $post)) {
            abort(403);
        }*/

        //$this->authorize('update', $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    /*public function show(Fruit $fruit)
    {
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    /*public function edit(Fruit $fruit)
    {
        //
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFruitRequest $request, Fruit $fruit)
    {
        //$validated = $request->validated();
        $fruit->update($request->validated());
        return new FruitResource($fruit);

        /*$fruit->update($request->all());
        return response()->json([
            'status' => true,
            'message' => "Fruit Updated successfully!",
            'fruit' => $fruit
        ], 200);*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fruit $fruit)
    {
        $fruit->delete();
        //return response(null, 200);
        //return response(null, 204);
        return response()->json([
            'message' => "Fruit Deleted successfully!"
        ], 200);

        /*$fruit->delete();
        return response()->json([
            'status' => true,
            'message' => "Fruit Deleted successfully!",
        ], 200);*/
    }
}
