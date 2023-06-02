<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.users.index', [
            "users" => $this->getUsers()
        ]);
    }

    public function getUsers()
    {
        return \App\Models\User::query()->orderBy("name")->paginate();
    }
}
