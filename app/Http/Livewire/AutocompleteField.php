<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AutocompleteField extends Component
{
    public $value;
    public $name;
    public $placeholder;
    public $class;

    public function mount($value = "", $name = "", $placeholder = "", $class = "")
    {
        $this->value = $value;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->class = $class;
    }

    public function updatedValue($newValue)
    {
        $this->emitUp("setField", $newValue);
    }

    public function render()
    {
        return view('livewire.autocomplete-field');
    }
}
