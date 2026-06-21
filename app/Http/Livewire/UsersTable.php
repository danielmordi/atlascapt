<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;
    
    public $search = '';

    public function render()
    {
        return view('livewire.users-table', [
            'users' => User::where('role_id', '!=', '1')
                            ->where('name', 'like', '%'.$this->search.'%')
                            ->paginate(10)
        ]);
    }
}
