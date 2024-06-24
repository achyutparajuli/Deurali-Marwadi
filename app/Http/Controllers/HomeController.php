<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        $mithais = $this->jsonDecode(public_path('assets/web/json/mithai.json'));
        $dinners = $this->jsonDecode(public_path('assets/web/json/dinner.json'));
        $suggestions = $this->jsonDecode(public_path('assets/web/json/suggested.json'));
        $reviews = $this->jsonDecode(public_path('assets/web/json/review.json'));

        return view('web.index', compact('mithais', 'dinners', 'suggestions', 'reviews'));
    }

    public function review()
    {
        return Redirect::to(env('REVIEW_URL'));
    }

    public function menu()
    {
        $pathToFile = public_path('Deurali Marwadi Menu.pdf');
        return response()->file($pathToFile);
    }

    public function connect()
    {
        return view('web.connect');
    }

    public function jsonDecode($path)
    {
        $json = file_get_contents($path);
        return json_decode($json, true);
    }
}
