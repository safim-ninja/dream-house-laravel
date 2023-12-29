<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\User;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        $users = User::get()->where('role', 'owner');
        $advertisements = Advertisement::get();
        return view('admin.dashboard', compact('users', 'advertisements'));
    }

    public function verifyOwner($id)
    {
        $owner = User::get()
            ->where('id', $id)
            ->first();
        return view('admin.ownerinfo', compact('owner'));
    }
    public function confirmOwner($id)
    {
        $owner = User::get()
            ->where('id', $id)
            ->first();
        // dd($owner);
        $owner->verification = true;
        $owner->save();
        return redirect()->route('admin.dashboard');
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
