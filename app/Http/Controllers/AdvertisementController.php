<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\User;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads = Advertisement::where('confirmation', true)
            ->latest()
            ->get();
        return view('index', compact('ads'));
    }
    public function search(Request $request)
    {
        $ads = Advertisement::get()
            ->where('confirmation', true)
            ->where('category', $request->category  )
            ->where('area', $request->area);
        return view('index', compact('ads'));
    }
    public function searchCategory($category)
    {
        $ads = Advertisement::get()
            ->where('confirmation', true)
            ->where('category', $category);
        return view('index', compact('ads'));
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
    public function show(Advertisement $advertisement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Advertisement $advertisement)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Advertisement $advertisement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function adminDestroy($id)
    {
        $advertisement = Advertisement::where('user_id', $id)->first();
        $owner = User::where('id', $id)->first();
        $owner->update([
            'submitted' => false,
            'confirmation' => false,
        ]);
        $advertisement->delete();
        return redirect()->route('admin.dashboard');
    }

    public function ownerDestroy(Advertisement $advertisement)
    {
        $advertisement = Advertisement::where('user_id', $id)->first();
        $owner = User::where('id', $id)->first();
        $owner->update([
            'submitted' => false,
            'confirmation' => false,
        ]);
        $advertisement->delete();
        return redirect()->route('owner.dashboard');
    }
}
