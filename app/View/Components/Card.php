<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $name;
    public $age;
    public $address;
    public $occupation;
    public $email;
    public $edit;
    public $delete;

    public function __construct($name, $age, $address, $occupation, $email, $edit = null, $delete = null)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->occupation = $occupation;
        $this->email = $email;
        $this->edit = $edit;
        $this->delete = $delete;
    }

    public function render()
    {
        return view('components.card');
    }
}
