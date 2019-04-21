<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CompanyController extends Controller
{
    public function show($alias)
    {
        $company = User::where('alias', $alias)->first();

        return view('company.show', compact('company'));
    }
}
