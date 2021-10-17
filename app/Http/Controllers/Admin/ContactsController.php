<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ContactsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $messages = $user->unreadNotifications()->get();
        $unreadMessages = $user->unreadNotifications()->count();
        return view('admins.contacts.index', [
            'messages' => $messages,
            'unreadMessages' => $unreadMessages,
            'page_title' => 'All Contact Messages'
        ]);
    }

    public function show($id)
    {
        $isUuid = Str::isUuid($id);
        $user = Auth::user();
        $notifciation = $user->notifications()->findOrFail($id);
        // return $isUuid;
        $notifciation->markAsRead();

        return view('admins.contacts.show', [
            'message' => $notifciation,
            'page_title' => 'Show Information Of The Contact'
        ]);
    }
}