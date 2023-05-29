<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = 'Lokasi';
        $data['table'] = Place::all();
        return view('lokasi.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = 'Tambah Lokasi';
        $data['table'] = Place::all();
        $data['kategori'] = Category::all();
        return view('lokasi.add',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            Place::create([
                'category_id'   => $request->category_id,
                'place_name'    => $request->place_name,
                'place_address' => $request->place_address,
                'lat'           => $request->lat,
                'lng'           => $request->lng,
                'cp'            => $request->contact_person,
                'phone'         => $request->nomor_hp,
                'email'         => $request->email??'-',
                'web'           => $request->web??'-',
                'instagram'     => $request->insta??'-',
                'youtube'       => $request->youtube??'-',
            ]);
            DB::commit();
            if(isset($request->type)){
                return redirect('success');
            }   
            return redirect()->back()->with('success','Tempat baru ditambahkan');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error','Error : '.$th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Place $place)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Place $place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Place $place)
    {
        //
    }
}
