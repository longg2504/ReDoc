<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Password extends Component
{
    public $name;
    public $placeholder;
    public $label;

    /**
     * @var string
     */


    /**
     * Create a new component instance.
     *
     * @param  string  $url
     * @param  string  $type
     *
     * @return void
     */

    public function __construct($data)
    {
        $this->name         = $data['item']['name'];
        $this->placeholder  = 'Nhập ' . $data['item']['name'];
        $this->label        = $data['item']['label'];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.password');
    }
}
