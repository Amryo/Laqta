<?php

namespace App\View\Components;

use App\Models\Client;
use App\Models\Client\About;
use Illuminate\View\Component;

class ClientComp extends Component
{
    public $aboutclients;
    public $clients;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->aboutclients = About::first();
        $this->clients = Client::get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.client-comp');
    }
}
