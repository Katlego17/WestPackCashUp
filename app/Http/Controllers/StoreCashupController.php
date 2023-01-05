<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use Auth;

class StoreCashupController extends Controller
{
    public function Home()
    {
        return view("store.home");
    }
    public function cashupform()
    {
        return view("store.cashupform",[
            'franchiseName'=> $this->franchiseName = Store::find(Auth::user()->store_id)->name
        ]);
    }
}
