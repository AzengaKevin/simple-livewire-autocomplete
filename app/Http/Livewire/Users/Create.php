<?php

namespace App\Http\Livewire\Users;

use Illuminate\Support\Collection;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $users;
    public $suggestionsFlag;

    public function __construct()
    {
        $this->suggestionsFlag = false;
        $this->users = Collection::empty();
    }

    public function mount()
    {
        $this->getUsers();
    }

    public function updatedName()
    {
        $this->getUsers();
    }

    public function getUsers()
    {
        $this->users = \App\Models\User::query()->when($this->name, function ($innerQuery, $name) {
            $innerQuery->where("name", "like", "%{$name}%");
        })->orderBy("name")
            ->limit(12)
            ->get(["id", "name"]);
    }

    public function selectUser($id)
    {
        $selectedUser = $this->users->where("id", $id)->first();

        $this->name = $selectedUser->name;

        $this->suggestionsFlag = false;
    }

    public function showSuggestions()
    {
        $this->suggestionsFlag = true;
    }

    public function hideSuggestions()
    {
        $this->suggestionsFlag = false;
    }

    public function render()
    {
        return view('livewire.users.create');
    }
}
