<?php

namespace App\Http\Controllers\Agromaster;


use Illuminate\View\View;


class AdmissionController extends IndexController
{
    //
    public function admission(): View
    {
        $banner['title'] = 'Інформація для вступника';
        $banner['image'] = 'images/page-banner-a.jpg';




        return view('agromaster.admission.index', compact('banner'))->with(['meta' => $this->meta]);

    }

    public function confirmation(): View
    {
        $banner['title'] = 'Оформлення договорів';
        $banner['image'] = 'images/page-banner-a.jpg';


        return view('agromaster.admission.confirmation', compact('banner'))->with(['meta' => $this->meta]);

    }
}
