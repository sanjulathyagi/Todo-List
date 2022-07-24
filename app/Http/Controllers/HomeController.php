<?php

namespace App\Http\Controllers;

use App\Models\product;
use domain\Facades\BannerFacade;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $response['banners'] = BannerFacade::allActive();
        return view('pages.home.index')->with($response);
    }

    public function relationship()
    {
        $response['products'] = product::all();
        return view('pages.relationship.index')->with($response);
    }
}
