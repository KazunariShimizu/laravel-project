<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MyAlert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public string $type;
    public string $alertTitle;
    public function __construct(string $type , string $alertTitle)
    {
        //
        $this->type = $type;
        $this->alertTitle = $alertTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.my-alert');
    }
}
