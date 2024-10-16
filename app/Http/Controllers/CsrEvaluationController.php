<?php

namespace App\Http\Controllers;

use App\Models\CsrEvaluation;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CsrEvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Inertia::render('CCCSREvaluation/Index');
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
    public function show(CsrEvaluation $csrEvaluation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CsrEvaluation $csrEvaluation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CsrEvaluation $csrEvaluation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CsrEvaluation $csrEvaluation)
    {
        //
    }
}
