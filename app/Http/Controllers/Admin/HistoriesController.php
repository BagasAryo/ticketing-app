<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class HistoriesController extends Controller
{
    public function index()
    {
        $histories = Order::all();
        return view('admin.histories.index', compact('histories'));
    }

    public function show(string $id)
    {
        $order = Order::findOrFail($id);
        return view('admin.histories.show', compact('order'));
    }
}
