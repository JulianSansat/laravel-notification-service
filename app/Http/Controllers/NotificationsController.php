<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use App\Events\newNotification;

class NotificationsController extends Controller
{

    public function store(Request $request, Notification $notification)
    {
       $data = $request->validate($notification::VALIDATION);
        
       try {
            $createdNotification = $notification->create($data);
            event(new newNotification($createdNotification));
        } catch (Exception $e) {
            return Redirect::back()->withErrors(['msg', 'Error while trying to save the notification']);
        }
    }
}
