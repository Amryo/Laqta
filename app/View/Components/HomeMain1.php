<?php

namespace App\View\Components;

use App\Models\Home\HomeMian1;
use Illuminate\View\Component;

class HomeMain1 extends Component
{
   public $main1;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->main1 = HomeMian1::get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home-main1');
    }
}
