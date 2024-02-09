<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use function Spatie\LaravelPdf\Support\pdf;


class ItemController extends Controller
{
    public function __invoke(Item $item)
    {
        return pdf()
            ->view('pdfs.item', ['item' => $item])
            ->name($item->tracking_number)
            ->download('invoice.pdf');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item, Request $request)
    {
        $item = Item::with('sender', 'receiver', 'trackingEvents')->where('tracking_number', $request->tracking_number)->first();
        return view('tracking', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
