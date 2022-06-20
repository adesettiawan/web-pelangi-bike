<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class DashboardController extends Controller
{
    public function index()
    {
        $data['title'] = 'Pelangi Bike';
        $data['intro'] = 'Pelangi Bike';
        $data['type'] = 'Pelangi Bike';
        $data['url'] = URL::current();

        return view('backend.beranda.index', compact('data'));
    }
}
