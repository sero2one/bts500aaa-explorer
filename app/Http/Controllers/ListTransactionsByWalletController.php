<?php

declare(strict_types=1);

namespace  App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;

final class ListTransactionsByWalletController extends Controller
{
    public function __invoke(Request $request, Wallet $wallet)
    {
        return $wallet->transactions()->paginate();
    }
}