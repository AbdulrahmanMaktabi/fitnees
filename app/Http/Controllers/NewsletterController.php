<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $email = $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        Newsletter::create($email);

        return to_route('theme.home')->with('newsletter', 'newsletter is sented successfully');
    }
}
