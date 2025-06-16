<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $entries = \App\Models\StockEntry::with(['product', 'supplier'])->get();
        $exits = \App\Models\StockExit::with('product')->get();
        return view('reports.index', compact('entries', 'exits'));
    }
}
