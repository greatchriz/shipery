<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Receiver;
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
        // get list of all senders and sort them by created_at
        $senders = Sender::with(['items'])->latest()->get();

        return view('sender.index', compact('senders'));
    }

    // senderCreate
    public function senderCreate()
    {
        return view('sender.create');
    }

    // senderStore
    public function senderStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'country' => 'required',
        ]);

        Sender::create([
            'name' => $request->name,
            'street' => $request->street,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'country' => $request->country,
        ]);

        return redirect()->route('sender.index');

    }

    // receiverIndex
    public function receiverIndex()
    {
        // get list of all senders and sort them by created_at
        $receivers = Receiver::with(['items'])->latest()->get();

        return view('receiver.index', compact('receivers'));
    }


}
