<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $text;
    public $styles;

    public function __construct($text, $styles)
    {
        $this->text = $text;
        $this->styles = $styles;
    }

    public function render()
    {
        return view('components.alert');
    }
}
