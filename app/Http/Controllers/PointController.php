<?php

namespace App\Http\Controllers;

use App\Models\Points;
use Illuminate\Http\Request;

class PointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->point = new Points();
    }

    public function index()
    {
        $points = $this->point->points();

        foreach($points as $p){
            $feature[] = [
                'type'=>'Feature',
                'geometry' => json_decode($p->geom),
                'properties' =>[
                    'id' => $p-> id,
                    'name' => $p->name,
                    'description' => $p->description,
                    'image' => $p->image,
                    'created_at' => $p->created_at,
                    'updated_at' => $p->updated_at
                ]
            ];
        }

        return response()->json([
            'type' => 'FeatureCollection',
            'features' => $feature,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * http://127.0.0.1:8000/api/points
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate request
        $request->validate([
            'name' => 'required',
            'geom' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif|max:10000' //10mb
        ],
        [
            'name.required' => 'Name is required',
            'geom.required' => 'Location is required',
            'image.mimes' => 'Image must be a file of type: jpeg, png, jpg, gif',
            'image.max' => 'Image must not exceed 10MB'
        ]);

        //Create folder images
        if (!is_dir('storage/images')) {
            mkdir('storage/images', 0777);
        }

        //uploud image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time(). '_point.' .$image->getClientOriginalExtension();
            $image->move('storage/images', $filename);
        } else {
            $filename = null;
        }

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'geom' => $request->geom,
            'image' => $filename
        ];

        //create point
        if(!$this->point->create($data)) {
            return redirect()->back()->with('error', 'Failed to create point');
        }

        //redirect to map
        return redirect()->back()->with('success', 'Point created succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $points = $this->point->point($id);

        foreach($points as $p){
            $feature[] = [
                'type'=>'Feature',
                'geometry' => json_decode($p->geom),
                'properties' =>[
                    'id' => $p-> id,
                    'name' => $p->name,
                    'description' => $p->description,
                    'image' => $p->image,
                    'created_at' => $p->created_at,
                    'updated_at' => $p->updated_at
                ]
            ];
        }

        return response()->json([
            'type' => 'FeatureCollection',
            'features' => $feature,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $point = $this->point->find($id);

        $data = [
            'title' => 'Edit Point',
            'point' => $point,
            'id' => $id,
        ];

        return view('edit-point', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validate request
        $request->validate([
            'name' => 'required',
            'geom' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif|max:10000' //10mb
        ],
        [
            'name.required' => 'Name is required',
            'geom.required' => 'Location is required',
            'image.mimes' => 'Image must be a file of type: jpeg, png, jpg, gif',
            'image.max' => 'Image must not exceed 10MB'
        ]);

        //Create folder images
        if (!is_dir('storage/images')) {
            mkdir('storage/images', 0777);
        }

        //uploud image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time(). '_point.' .$image->getClientOriginalExtension();
            $image->move('storage/images', $filename);

        //delete image
        $image_old = $request->image_old;
        if ($image_old !=null){
            unlink('storage/images/'. $image_old);
        }

        } else {
            $filename = $request->image_old;
        }

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'geom' => $request->geom,
            'image' => $filename
        ];

        //update point
        if(!$this->point->find($id)->update($data)) {
            return redirect()->back()->with('error', 'Failed to update point');
        }

        //redirect to map
        return redirect()->back()->with('success', 'Point updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //get image
        $image = $this->point->find($id)->image;

        //delete point
        if (!$this->point->destroy($id)) {
            return redirect()->back()->with('error', 'Failed to delete point');
        }

        //delete image
        if ($image != null) {
            unlink('storage/images/' . $image);
        }

        //redirect to map
        return redirect()->back()->with('success', 'Point deleted successfuly');
    }

    public function table() {
        $points = $this->point->points();

        $data = [
            'title' => 'Table Point',
            'points' => $points
        ];

        return view('table-point',$data);
    }
}
