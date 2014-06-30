<?php namespace Chenkacrud\Filters;

use Auth, Redirect, URL;

class BackendAuth {

    public function filter() {
        if (Auth::guest()) return Redirect::guest( URL::route('backend.login') );
    }

}


 