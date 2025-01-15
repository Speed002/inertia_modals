<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleModalController extends Controller
{
    public function __invoke()
    {
        // the modal has a specific base route or foundation page it seats on, and that must be referenced
        return inertia()->modal('Example')->baseRoute('dashboard');
    }
}
