<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\User;
use App\Models\Payment;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        $users = User::get()->where('role', 'owner');
        $advertisements = Advertisement::get();
        return view('admin.dashboard', compact('users', 'advertisements'));
    }

    public function ownerAds($id)
    {
        $ads = Advertisement::where('user_id', $id)
            ->latest()
            ->get();
        $owner = User::get()
            ->where('id', $id)
            ->first();
        return view('admin.ownerAds', compact('owner', 'ads'));
    }

    public function confirmAd($id)
    {
        $advertisement = Advertisement::get()
            ->where('id', $id)
            ->first();
        $advertisement->confirmation = true;
        $advertisement->save();
        return redirect()->route('admin.dashboard');
    }

    public function deleteAd($id)
    {
        $advertisement = Advertisement::get()
            ->where('id', $id)
            ->first();
        $user = User::find($advertisement->user_id);
        $user->ad_count = $user->ad_count - 1;
        $advertisement->delete();
        return redirect()->route('admin.dashboard');
    }

    public function userPaymentList($id)
    {
        $payments = Payment::where('user_id', $id)
            ->latest()
            ->get();
        return view('admin.user-payments-list', compact('payments'));
        //
    }

    public function approvePayment($id)
    {
        $user = User::find($id);
        $user->update([
            'payment_status' => 2,
        ]);
        return redirect()->route('admin.dashboard');
        //
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
