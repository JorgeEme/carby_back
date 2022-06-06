<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserDiscountRequest;
use App\Http\Requests\UpdateUserDiscountRequest;
use App\Models\UserDiscount;

class UserDiscountController extends Controller
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
     * @param  \App\Http\Requests\StoreUserDiscountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserDiscountRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserDiscount  $userDiscount
     * @return \Illuminate\Http\Response
     */
    public function show(UserDiscount $userDiscount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserDiscount  $userDiscount
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDiscount $userDiscount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserDiscountRequest  $request
     * @param  \App\Models\UserDiscount  $userDiscount
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserDiscountRequest $request, UserDiscount $userDiscount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserDiscount  $userDiscount
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDiscount $userDiscount)
    {
        //
    }
}
