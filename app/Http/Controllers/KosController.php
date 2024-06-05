<?php

namespace App\Http\Controllers;

use App\Models\Kos;
use Illuminate\Http\Request;

class KosController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $pageTitle ='search kos';
        $kos = Kos::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('address', 'LIKE', "%{$search}%")
            ->get();

        return view('penyewa.search-kos', compact('kos'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kos = Kos::findOrFail($id);
        return view('penyewa.show-kos', compact('kos'));
    }
}
