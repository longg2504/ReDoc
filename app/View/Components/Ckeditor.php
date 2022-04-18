<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Ckeditor extends Component
{
    public $name;
    public $value;
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
        $this->name = $data['item']['name'];
        $this->value = @$data['item_model']->{$data['item']['name']};
        $this->label = $data['item']['label'];
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ckeditor');
    }
}
