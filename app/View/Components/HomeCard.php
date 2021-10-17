<?php

namespace App\View\Components;

use App\Models\Home\HomeCard as HomeHomeCard;
use Illuminate\View\Component;

class HomeCard extends Component
{
    public $card;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->card = HomeHomeCard::first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home-card');
    }
}
