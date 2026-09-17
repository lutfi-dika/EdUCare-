<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $userId = session('user.id');
        $notifications = Notification::where('user_id', $userId)
            ->latest()
            ->take(50)
            ->get();

        $unreadCount = Notification::where('user_id', $userId)->where('is_read', false)->count();

        return view('notifications.index', compact('notifications', 'unreadCount'));
    }

    public function read($id)
    {
        $userId = session('user.id');
        $notification = Notification::where('id', $id)->where('user_id', $userId)->firstOrFail();
        $notification->update(['is_read' => true]);

        if ($notification->link) {
            return redirect($notification->link);
        }

        return back();
    }

    public function readAll()
    {
        $userId = session('user.id');
        Notification::where('user_id', $userId)->where('is_read', false)->update(['is_read' => true]);
        return back();
    }

    public function unreadCount()
    {
        $userId = session('user.id');
        $count = Notification::where('user_id', $userId)->where('is_read', false)->count();
        return response()->json(['count' => $count]);
    }
}
