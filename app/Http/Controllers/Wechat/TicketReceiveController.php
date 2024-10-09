<?php

namespace App\Http\Controllers\Wechat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TicketReceiveController extends Controller
{
    public function receive(Request $request): void
    {
        $data = $request->all();
        Log::info(json_encode($data));
        echo 'success';
    }
}
