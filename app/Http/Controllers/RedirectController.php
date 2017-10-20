<?php

namespace App\Http\Controllers;

use \Crypt;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function render(Request $request)
    {
        $encrypted_link = $request->query('link');
        if ($encrypted_link) {
          $link = decryptLink($encrypted_link);
          return view('render')->with('link', $link);
        }
        abort('404');
    }
}
