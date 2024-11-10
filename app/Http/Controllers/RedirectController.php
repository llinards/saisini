<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function index(Request $request)
    {
        $linkToRedirect = Link::where('short_url', ltrim($request->getPathInfo(), '/'))->first();
        if ( ! $linkToRedirect) {
            abort(404);
        }

        return redirect($linkToRedirect->long_url);
    }
}
