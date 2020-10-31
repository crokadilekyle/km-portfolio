<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public $projects;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($projects)
    {
        $this->projects = $projects;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.table');
    }
}
