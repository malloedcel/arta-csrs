<?php

namespace App\Http\Controllers;

use App\Models\Srf;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SrfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Inertia::render('SRF/Index');

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
    public function show(Srf $srf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Srf $srf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Srf $srf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Srf $srf)
    {
        //
    }
}
