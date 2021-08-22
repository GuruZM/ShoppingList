<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Listheading extends Component
{
    public $complete = false;
    protected $listeners = ['change' => 'change'];
    public function render()
    {
        return view('livewire.listheading');
    }
    public function change ()
    {
        dd('bamjhw');
        $this->complete =  !$this->complete;
    }

}
