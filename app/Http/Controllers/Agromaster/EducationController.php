<?php

namespace App\Http\Controllers\Agromaster;


use Illuminate\View\View;


class EducationController extends IndexController
{
    //
    public function schedule(): View
    {
        $banner = ['title' => 'Розклад занять', 'image' => 'images/page-banner-a.jpg'];

        return view('agromaster.education.schedule', compact('banner'))->with(['meta' => $this->meta]);
    }

    public function session(): View
    {
        $banner = ['title' => 'Розклад іспитів', 'image' => 'images/page-banner-a.jpg'];

        return view('agromaster.education.session', compact('banner'))->with(['meta' => $this->meta]);
    }

    public function lists(): View
    {
        $banner = ['title' => 'Списки груп', 'image' => 'images/page-banner-a.jpg'];

        return view('agromaster.education.lists', compact('banner'))->with(['meta' => $this->meta]);
    }

    public function details(): View
    {
        $banner = ['title' => 'Реквізити оплати за навчання', 'image' => 'images/page-banner-a.jpg'];

        return view('agromaster.education.details', compact('banner'))->with(['meta' => $this->meta]);
    }

    public function reference(): View
    {
        $banner = ['title' => 'Довідки', 'image' => 'images/page-banner-a.jpg'];

        return view('agromaster.education.reference', compact('banner'))->with(['meta' => $this->meta]);
    }
}
