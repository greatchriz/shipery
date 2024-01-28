<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Sender;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $items = Item::with(['trackingEvents', 'sender', 'receiver'])
                    ->latest()
                    ->get();

        return view('dashboard', compact('items'));
    }

    // senderIndex
    public function senderIndex()
    {
        $senders = Sender::with(['items'])->latest->get();

        return view('sender.index', compact('senders'));
    }


}
