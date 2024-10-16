<?php

namespace App\Http\Controllers;

use App\Models\SqdCsrEvaluation;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SqdCsrEvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Inertia::render('SQDCSREvaluation/Index');
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
    public function show(SqdCsrEvaluation $sqdCsrEvaluation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SqdCsrEvaluation $sqdCsrEvaluation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SqdCsrEvaluation $sqdCsrEvaluation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SqdCsrEvaluation $sqdCsrEvaluation)
    {
        //
    }
}
