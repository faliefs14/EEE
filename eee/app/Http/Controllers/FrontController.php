<?php

namespace App\Http\Controllers;

use Illuminate\Cookie\CookieJar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['only'=>'index']);
    }
    
    public function index() {
        //
        return view('nonmember.index');
    }
}
