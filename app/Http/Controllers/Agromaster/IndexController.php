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
        $sliders = array();
        $sliders[0] = [
            'image' => 'images/sliders/slider-3.jpg',
            'title' => 'Вища освіта Європейського рівня',
            'btn_1' => 'Бакалавр',
            'btn_2' => 'Магістратура',
            'link_1' => 'home',
            'link_2' => 'home',
        ];
        $sliders[1] = [
            'image' => 'images/sliders/slider-4.jpg',
            'title' => 'Приєднуйся до еліти великої країни',
            'btn_1' => 'Бакалавр',
            'btn_2' => 'Магістратура',
            'link_1' => 'home',
            'link_2' => 'home',
        ];

        $blog[] = ['title' => 'ОП Агроінженерія (бакалавр)', 'href' => 'home', 'image' => 'images/courses/208-1.webp'];
        $blog[] = ['title' => 'ОПП Агроінженерія (магістр)', 'href' => 'home', 'image' => 'images/courses/208-2.webp'];
        $blog[] = ['title' => 'ОНП Агроінженерія (магістр-науковець)', 'href' => 'home', 'image' => 'images/courses/208-3.webp'];


        $counter['bg'] = 'images/counter-bg.jpg';
        $counter['arr'][] = ['title' => 'Студентів', 'count' => '3652'];
        $counter['arr'][] = ['title' => 'Бібліотечний фонд', 'count' => '7000'];
        $counter['arr'][] = ['title' => 'Років історії', 'count' => '90'];
        $counter['arr'][] = ['title' => 'Нагород', 'count' => '30'];


        $friends[] = 'images/friends/fr-1.png';
        $friends[] = 'images/friends/fr-2.png';
        $friends[] = 'images/friends/fr-3.png';
        $friends[] = 'images/friends/fr-4.png';
        $friends[] = 'images/friends/fr-5.png';
        $friends[] = 'images/friends/fr-6.png';
        $friends[] = 'images/friends/fr-7.png';
        $friends[] = 'images/friends/fr-8.png';
        shuffle($friends);


        $campus['image'][] = 'images/campus/1.jpg';
        $campus['image'][] = 'images/campus/2.jpg';
        $campus['image'][] = 'images/campus/3.jpg';
        $campus['image'][] = 'images/campus/4.jpg';
        $campus['video'] = 'https://www.youtube.com/watch?v=yAkquJnlGZg';


        $courses = array();
        $courses[] = [
            'title' => '208 Агроінженерія',
            'image' => 'images/courses/208.webp',
            'href' => 'home',
            'duration' => 'Бакалавр: <span> 4 роки</span>', 'fee' => 'Магістр: <span> 1,5 або 2 роки'
        ];
        $courses[] = [
            'title' => '274 Автомобільний транспорт',
            'image' => 'images/courses/274.webp',
            'href' => 'home',
            'duration' => 'Бакалавр: <span> 4 роки</span>', 'fee' => 'Магістр: <span> 1,5 роки'
        ];
        $courses[] = [
            'title' => '133 Галузеве машинобудування',
            'image' => 'images/courses/133.webp',
            'href' => 'home',
            'duration' => 'Бакалавр: <span> 4 роки</span>', 'fee' => 'Магістр: <span> 1,5 роки'
        ];
        $courses[] = [
            'title' => '131 Прикладна механіка',
            'image' => 'images/courses/131.webp',
            'href' => 'home',
            'duration' => 'Бакалавр: <span> 4 роки</span>', 'fee' => 'Магістр: <span> 1,5 роки'
        ];
        $courses[] = [
            'title' => '192 Будівництво та цив. інженерія',
            'image' => 'images/courses/192.webp',
            'href' => 'home',
            'duration' => 'Бакалавр: <span> 4 роки</span>', 'fee' => 'Магістр: <span> 1,5 роки'
        ];
        $courses[] = [
            'title' => '191 Архітектура та містобудування',
            'image' => 'images/courses/191.webp',
            'href' => 'home',
            'duration' => 'Бакалавр: <span> 4 роки</span>', 'fee' => 'Магістр: <span> 1,5 роки'
        ];


        return view('agromaster.index', compact('sliders', 'blog', 'friends', 'counter', 'campus', 'courses'))->with(['meta' => $this->meta]);
    }

}
