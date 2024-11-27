<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BreadcrumbComponent extends Component
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $img;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $img)
    {
        $this->img = $img;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.breadcrumb-component');
    }
}
