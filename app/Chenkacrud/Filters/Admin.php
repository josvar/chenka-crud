<?php namespace Chenkacrud\Filters;

use Auth, Redirect;

class Admin {

    public function filter() {
        if (Auth::guest()) return Redirect::guest('admin/login');
    }

}


 