<?php

namespace App\Http\Controllers;

use App\Auto;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $autos = Auto::all();

      return response()->json([
        'data' => $autos,
        'success' => true,
      ]);
    }

}
