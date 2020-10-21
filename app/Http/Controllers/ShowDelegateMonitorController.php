<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

final class ShowDelegateMonitorController
{
    public function __invoke(Request $request): \Illuminate\Http\Response
    {
        return Response::noContent();
    }
}
