<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UserStats extends Component
{
    public $user;

    protected $listeners = ['userUpdated' => 'refreshStats'];

    public function mount($user)
    {
        $this->user = $user;
    }

    public function refreshStats()
    {
        $this->user = User::find($this->user->id);
    }

    public function render()
    {
        return view('livewire.admin.user-stats');
    }
}
