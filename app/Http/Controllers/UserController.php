<?php

namespace App\Http\Controllers;
use App\User;
use App\Events\UserCreated;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Ship the given order.
     *
     * @param  int  $id
     * @return Response
     */
    public function getUser($id)
    {
        $user = User::findOrFail($id);

        event(new UserCreated($user));

        return $user;
    }
}
