<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;

class MyController extends Controller
{
  public function getDrink() {

    $drinks = Drink::all();

    $prezzoMax = $drinks->max('prezzo');
    $prezzoMin = $drinks->min('prezzo');
    $prezzoAvg = $drinks->avg('prezzo');

    return view('drink', compact('drinks', 'prezzoMax', 'prezzoMin', 'prezzoAvg'));
  }
}
