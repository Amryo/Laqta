<?php

namespace App\View\Components;

use App\Models\Home\HomeHeader;
use Illuminate\View\Component;

class HomeFrontVideo2 extends Component
{
    public $header;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $header = HomeHeader::first();
        $this->header = $header;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home-front-video2');
    }
}
