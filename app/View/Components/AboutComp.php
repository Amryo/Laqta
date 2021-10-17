<?php

namespace App\View\Components;

use App\Models\About\Allabout;
use App\Models\About\Team;
use Illuminate\View\Component;

class AboutComp extends Component
{
    public $allabout;
    public $teams;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->allabout = Allabout::first();
        $this->teams = Team::get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.about-comp');
    }
}
