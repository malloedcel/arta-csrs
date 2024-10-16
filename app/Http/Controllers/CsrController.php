<?php

namespace App\Http\Controllers;

use App\Models\Csr;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CsrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Inertia::render('CSR/Index');
        
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
    public function show()
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Csr $csr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Csr $csr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Csr $csr)
    {
        //
    }
}
