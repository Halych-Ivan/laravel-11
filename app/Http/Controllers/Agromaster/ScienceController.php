<?php

namespace App\Http\Controllers\Agromaster;


use Illuminate\View\View;


class ScienceController extends IndexController
{
    //
    public function conference(): View
    {
        $banner = ['title' => 'Наукова конференція', 'image' => 'images/page-banner-a.jpg'];

        return view('agromaster.science.conference', compact('banner'))->with(['meta' => $this->meta]);
    }

    public function vsdemm(): View
    {
        $banner = ['title' => 'ВСДЕММ', 'image' => 'images/page-banner-a.jpg'];

        return view('agromaster.science.vsdemm', compact('banner'))->with(['meta' => $this->meta]);
    }
}
