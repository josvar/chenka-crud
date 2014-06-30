<?php namespace Chenkacrud\Filters;

use Auth;
use Redirect;

class BackendGuest {

    public function filter() {
        if ( Auth::check() ) return Redirect::route('backend.dashboard');
    }
}