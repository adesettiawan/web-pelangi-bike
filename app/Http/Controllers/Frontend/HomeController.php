<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller
{
    public function index()
    {
        $data['title'] = 'Website Pelangi Bike';
        $data['intro'] = 'Website Pelangi Bike';
        $data['type'] = 'Website Pelangi Bike';
        $data['url'] = URL::current();

        return view('frontend.beranda.index', compact('data'));
    }
}
