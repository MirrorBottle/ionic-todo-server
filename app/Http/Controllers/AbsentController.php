<?php

namespace App\Http\Controllers;

use App\Http\Resources\AbsentResource;
use App\Models\Absent;
use App\Models\Lecture;
use App\Models\User;
use Illuminate\Http\Request;
use Google\Client;
use Revolution\Google\Sheets\Facades\Sheets;
class AbsentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Absent::query();

        $user_id = $request->user_id;
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        if(!empty($user_id)) {
            $query = $query->where('user_id', $user_id);
        }

        if(!empty($start_date) && !empty($end_date)) {
            $query = $query->whereBetween('created_at', ["$start_date 00:00:00", "$end_date 23:59:59"]);
        }
        
        $absents = $query->get();
        return AbsentResource::collection($absents);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $absent = Absent::create($request->all());
        return new AbsentResource($absent);
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
