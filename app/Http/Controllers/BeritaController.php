<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Contracts\View\View;

class BeritaController extends Controller
{
    public function index(): View
    {
        $beritas = Berita::query()->get();

        return view('berita', ['beritas' => $beritas]);
    }

    public function show(Berita $berita): View
    {
        return view('berita-tunggal', ['berita' => $berita]);
    }
}
