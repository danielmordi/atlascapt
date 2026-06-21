<?php

namespace App\Http\Livewire\User\Trades;

use Livewire\Component;
use App\Models\CopyTrader as CopyTraderModel;
use Livewire\WithPagination;

class CopyTrader extends Component
{
    use WithPagination;

    public $search = '';

    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $copyTraders = CopyTraderModel::where('username', 'like', '%' . $this->search . '%')
            ->paginate(10);

        return view('livewire.user.trades.copy-trader', [
            'copyTraders' => $copyTraders
        ]);
    }
}
