<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class OwnerController extends Controller
{



    public function ownerDashboard() {

        return view('owner.dashboard');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
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
        //
    }

    public function verification(Request $request, $id)
    {

        $user = User::find($id);
        // dd($user);

        $nid = time(). '-' . $user->id . '-nid' . '.' . $request->nid->extension();
        $bill = time(). '-' . $user->id . '-bill' .  '.' . $request->bill->extension();

        $request->nid->move(public_path('images/verification'), $nid);
        $request->bill->move(public_path('images/verification'), $bill);
        // dd($request->nid);
        // dd($nid);

        $user->nid = $nid;
        $user->bill = $bill;
        $user->submitted = true;

        $user->save();

        return redirect()->route('owner.dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}