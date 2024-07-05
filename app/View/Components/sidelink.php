<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class sidelink extends Component
{
    public $title ;
    public $index;
    public $form;
    public $url;
    public function __construct($title, $index=null,$form=null, $url=null)
    {
        $this->title = $title;
        $this->index = $index;
        $this->form = $form;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidelink');
    }
}