<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\Wallet;
use App\ViewModels\ViewModelFactory;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

final class WalletTable extends Component
{
    use WithPagination;

    public function render(): View
    {
        return view('livewire.wallet-table', [
            'wallets' => ViewModelFactory::paginate(Wallet::wealthy()->paginate()),
        ]);
    }
}
