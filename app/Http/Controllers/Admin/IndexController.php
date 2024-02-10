<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends \App\Http\Controllers\Agromaster\IndexController
{
    //
    public function index()
    {
        $this->meta['title'] = 'ADMIN';

        return view('agromaster.index')->with(['meta' => $this->meta]);
    }
}
