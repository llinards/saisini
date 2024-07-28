<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function index(Request $request)
    {
        $linkToRedirect = Link::where('short_url', $request->url())->firstOrFail();
        return redirect($linkToRedirect->long_url);
    }
}
