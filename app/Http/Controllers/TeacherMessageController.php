<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use App\Models\Material;
use App\Models\Notification;
use Illuminate\Http\Request;

class TeacherMessageController extends Controller
{
    public function index()
    {
        $userId = session('user.id');

        $conversations = Message::where('sender_id', $userId)
            ->orWhere('receiver_id', $userId)
            ->with('sender', 'receiver', 'material')
            ->latest()
            ->get()
            ->groupBy(function ($msg) use ($userId) {
                return $msg->sender_id == $userId ? $msg->receiver_id : $msg->sender_id;
            })
            ->map(function ($msgs, $otherUserId) {
                $otherUser = User::find($otherUserId);
                $lastMsg = $msgs->first();
                $unreadCount = $msgs->where('receiver_id', session('user.id'))->where('is_read', false)->count();
                return [
                    'user' => $otherUser,
                    'last_message' => $lastMsg->message,
                    'last_time' => $lastMsg->created_at,
                    'unread_count' => $unreadCount,
                ];
            })
            ->sortByDesc('last_time')
            ->values();

        $students = User::where('role', 'student')->get();
        $materials = Material::where('status', 'published')->get();

        return view('teacher.messages', compact('conversations', 'students', 'materials'));
    }

    public function conversation($userId)
    {
        $myId = session('user.id');

        $otherUser = User::findOrFail($userId);
        $messages = Message::where(function ($q) use ($myId, $userId) {
            $q->where('sender_id', $myId)->where('receiver_id', $userId);
        })->orWhere(function ($q) use ($myId, $userId) {
            $q->where('sender_id', $userId)->where('receiver_id', $myId);
        })->with('material')->orderBy('created_at', 'asc')->get();

        Message::where('sender_id', $userId)->where('receiver_id', $myId)->update(['is_read' => true]);

        $students = User::where('role', 'student')->get();
        $materials = Material::where('status', 'published')->get();

        return view('teacher.chat', compact('otherUser', 'messages', 'students', 'materials'));
    }

    public function send(Request $request)
    {
        $userId = session('user.id');

        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'material_id' => 'nullable|exists:materials,id',
            'message' => 'required|string|max:5000',
        ]);

        Message::create([
            'sender_id' => $userId,
            'receiver_id' => $request->receiver_id,
            'material_id' => $request->material_id,
            'message' => $request->message,
        ]);

        Notification::create([
            'user_id' => $request->receiver_id,
            'title' => 'Pesan Baru',
            'message' => session('user.name') . ' mengirim pesan kepada kamu.',
            'type' => 'message',
            'link' => '/teacher/messages/' . $userId,
        ]);

        return back()->with('success', 'Pesan terkirim!');
    }
}
