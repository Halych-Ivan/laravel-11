<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AgromasterLayout extends Component
{
    public string $title = '';
    public string $description = '';
    public string $keywords = '';
    public string $image = '';
    public string $site_name = '';
    public string $width = '';
    public string $height = '';

    public function __construct($meta)
    {
        $this->title = $meta['title'] ?? '';
        $this->description = $meta['description'] ?? '';
        $this->keywords = $meta['keywords'] ?? '';
        $this->image = $meta['image'] ?? '';
        $this->site_name = $meta['site_name'] ?? '';
        $this->width = $meta['width'] ?? '180';
        $this->height = $meta['height'] ?? '180';
    }


    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('agromaster.layout');
    }
}
