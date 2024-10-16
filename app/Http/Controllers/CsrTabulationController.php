<?php

namespace App\Http\Controllers;

use App\Models\CsrTabulation;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CsrTabulationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Inertia::render('CSRTabulation/Index');
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
    public function show(CsrTabulation $csrTabulation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CsrTabulation $csrTabulation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CsrTabulation $csrTabulation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CsrTabulation $csrTabulation)
    {
        //
    }
}
