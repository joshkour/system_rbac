<?php

namespace App\Controllers;

use Auth;

/**
 * BaseController class.
 *
 * @author Josh Kour <josh.kour@gmail.com>
 */
class BaseController {

	/**
     * Check if current logged in user has permission to access.
     *
     * @param string $permission
     * @return bool
     */
    public function hasPermission(string $permission) : bool
    {
        if (Auth::user()->hasPermission(PERMISSION_VIEW_DASHBOARD_INDEX)) {
            return true;
        }

        return false;
    }
}