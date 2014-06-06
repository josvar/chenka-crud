<?php namespace Chenkacrud\Filters;

use Auth, Redirect, URL;

class Admin {

    public function filter() {
        if (Auth::guest()) return Redirect::guest( URL::route('login') );
    }

}


 