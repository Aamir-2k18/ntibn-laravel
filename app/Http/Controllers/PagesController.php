<?php

namespace App\Http\Controllers;

use App\Pages;
use Illuminate\Http\Request;

class PagesController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function __construct() {
        // if ( !Auth::check() ) return 'NO';
    }

    public function index() {
        return view( 'homepage' );
    }

    public function about() {
        return view( 'about' );
    }

    public function membership() {
        return view( 'membership' );
    }

    public function registeration() {
        return view( 'registeration' );
    }

    public function events() {
        return view( 'events' );
    }

    public function privacy() {
        return view( 'privacy' );
    }

    public function refund() {
        return view( 'refund' );
    }

    public function terms() {
        return view( 'terms' );
    }

    public function search() {
        return view( 'search' );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        //
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Pages  $pages
    * @return \Illuminate\Http\Response
    */

    public function show( Pages $pages ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Pages  $pages
    * @return \Illuminate\Http\Response
    */

    public function edit( Pages $pages ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Pages  $pages
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, Pages $pages ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Pages  $pages
    * @return \Illuminate\Http\Response
    */

    public function destroy( Pages $pages ) {
        //
    }
}
