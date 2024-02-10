<?php

namespace App\Http\Controllers\Agromaster;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class IndexController extends Controller
{
    //
    public array $meta;

    public function __construct()
    {
        $this->meta['title'] = 'TEST TITLE';
        $this->meta['description'] = 'TEST description';
        $this->meta['keywords'] = 'TEST keywords';
        $this->meta['image'] = 'TEST image';
        $this->meta['site_name'] = 'TEST site_name';
        $this->meta['width'] = 180;
        $this->meta['height'] = 180;
    }


    public function index()
    {

        return view('agromaster.index')->with(['meta' => $this->meta]);
    }

}
