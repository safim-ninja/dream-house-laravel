<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Advertisement;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function ownerDashboard()
    {
        return view('owner.dashboard');
    }

    public function placeAd(Request $request, $id)
    {
        $user = User::find($id);

        $photo1 = time() . '-' . $user->id . '-photo1' . '.' . $request->photo1->extension();
        $request->photo1->move(public_path('images/ads'), $photo1);

        $photo2 = time() . '-' . $user->id . '-photo2' . '.' . $request->photo2->extension();
        $request->photo2->move(public_path('images/ads'), $photo2);

        $photo3 = time() . '-' . $user->id . '-photo3' . '.' . $request->photo3->extension();
        $request->photo3->move(public_path('images/ads'), $photo3);

        if ($request->photo4) {
            $photo4 = time() . '-' . $user->id . '-photo4' . '.' . $request->photo4->extension();
            $request->photo4->move(public_path('images/ads'), $photo4);
        } else {
            $photo4 = null;
        }
        if ($request->photo5) {
            $photo5 = time() . '-' . $user->id . '-photo5' . '.' . $request->photo5->extension();
            $request->photo5->move(public_path('images/ads'), $photo5);
        } else {
            $photo5 = null;
        }

        $nid = time() . '-' . $user->id . '-nid' . '.' . $request->nid->extension();
        $bill = time() . '-' . $user->id . '-bill' . '.' . $request->bill->extension();

        $request->nid->move(public_path('images/verification'), $nid);
        $request->bill->move(public_path('images/verification'), $bill);

        Advertisement::create([
            'user_id' => $id,
            'bed' => $request->bed,
            'bath' => $request->bath,
            'rent' => $request->rent,
            'area' => $request->area,
            'address' => $request->address,
            // 'submitted' => true,

            'photo1' => $photo1,
            'photo2' => $photo2,
            'photo3' => $photo3,
            'photo4' => $photo4,
            'photo5' => $photo5,
            'nid' => $nid,
            'bill' => $bill,
        ]);

        $user->submitted = true;
        $user->save();

        return redirect()->route('owner.dashboard');
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

        $nid = time() . '-' . $user->id . '-nid' . '.' . $request->nid->extension();
        $bill = time() . '-' . $user->id . '-bill' . '.' . $request->bill->extension();

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
