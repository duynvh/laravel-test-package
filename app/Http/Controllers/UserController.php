<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Combine firstname and lastname
     *
     * @param Request $request
     * @return \Illuminate\Http\Response|string
     */
    public function create(Request $request)
    {
        $userData = $request->only([
            'firstname',
            'lastname',
        ]);
        if (empty($userData['firstname']) && empty($userData['lastname'])) {
            return new \Exception('Missing data', 404);
        }
        return $userData['firstname'] . ' ' . $userData['lastname'];
    }
}