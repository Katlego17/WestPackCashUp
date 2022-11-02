<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreCashupController extends Controller
{
    public function Home()
    {
        return view("store.home");
    }
    public function cashupform()
    {
        return view("store.cashupform");
    }
}
