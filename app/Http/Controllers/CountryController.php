<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryStoreRequest;
use App\Http\Requests\CountryUpdateRequest;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return view('dashboard', ['countries' => $countries]);
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
     * @param CountryStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryStoreRequest $request)
    {
        $user_id = Auth::id();
        $country = new Country();
        $country->name = $request->name;
        $country->iso = $request->iso;
        $country->user_id = $user_id;
        $country->save();

        $countries = Country::all();
        return view('dashboard', [
            'countries' => $countries,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view('edit-country', ['country' => $country]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CountryUpdateRequest  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(CountryUpdateRequest $request, Country $country)
    {
        if ($request->get('iso')) {
            $country->iso = $request->get('iso');
        }
        if ($request->get('name')) {
            $country->name = $request->get('name');
        }
        $country->user_id = Auth::id();

        $country->save();

        return \redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $country->delete();

        $countries = Country::all();
        return view('dashboard', ['countries' => $countries]);
    }
}
