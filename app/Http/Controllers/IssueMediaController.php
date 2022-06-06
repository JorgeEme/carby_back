<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIssueMediaRequest;
use App\Http\Requests\UpdateIssueMediaRequest;
use App\Models\IssueMedia;

class IssueMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIssueMediaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIssueMediaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IssueMedia  $issueMedia
     * @return \Illuminate\Http\Response
     */
    public function show(IssueMedia $issueMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IssueMedia  $issueMedia
     * @return \Illuminate\Http\Response
     */
    public function edit(IssueMedia $issueMedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIssueMediaRequest  $request
     * @param  \App\Models\IssueMedia  $issueMedia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIssueMediaRequest $request, IssueMedia $issueMedia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IssueMedia  $issueMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(IssueMedia $issueMedia)
    {
        //
    }
}
