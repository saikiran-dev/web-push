<?php
 
namespace App\Http\Controllers\user;
 
use App\Http\Controllers\Controller;
use App\Events\TestNotification;
use App\Models\User;
 
class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function sendNotification(User $user)
    {
        event(new TestNotification($user));
        return response("fired");
    }

    public function activeUser(User $user)
    {
        $user->is_logged_in = true;
        $user->save();

        return $user->is_logged_in;
    }

    public function deactiveUser(User $user)
    {
        $user->is_logged_in = false;
        $user->save();

        return $user->is_logged_in;
    }
}