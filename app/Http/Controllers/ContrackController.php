<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $data = [
                1 => 100,
                2 => 150,
            ];
         return response()->json(['status'=>'success','data' =>$data], 200);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user(); 

        $contrack = new Contrack;
        $contrack->user_id = $user->id;
        $contrack->contrack_number = $request->contrack_number;
        $contrack->fuel = $request->fuel;
        $contrack->false_amount = $request->false_amount;
        $contrack->driver_salary = $request->driver_salary;
        $contrack->road_amount = $request->road_amount;
        $contrack->company_discover = $request->company_discover;
        $contrack->yon_mount = $request->yon_mount;
        $contrack->part_discoin = $request->part_discoin;
        $contrack->fix_discoin = $request->fix_discoin;
        $contrack->othen_discoin = $request->othen_discoin;
        $contrack->save();

        return response()->json(['status'=>'success','data'=>$contrack], 200);

        // return json_encode(value)

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
