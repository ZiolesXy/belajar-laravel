<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuControler extends Controller
{
    public function index() {
        return view('menu', [
            'title' => 'Ini Halaman Menu',
            'menus' => Menu::all()
        ]);
    }
}
