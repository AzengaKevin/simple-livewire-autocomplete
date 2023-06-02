<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;

class Create extends Component
{
    public $name;
    public $results;
    public $showUserSuggestions;

    public function updatedName($value)
    {
        info($value);
    }

    public function submit()
    {
        info($this->name);
    }

    public function render()
    {
        return view('livewire.users.create');
    }
}
