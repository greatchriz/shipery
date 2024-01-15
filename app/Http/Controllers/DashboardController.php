<?php

namespace App\Http\Controllers;

use App\Models\Item;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $items = Item::with(['trackingEvents', 'sender', 'receiver'])
                    ->latest()
                    ->paginate(15);

        return view('dashboard', compact('items'));
    }
}
