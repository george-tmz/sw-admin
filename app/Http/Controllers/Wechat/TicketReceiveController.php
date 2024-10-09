<?php

namespace App\Http\Controllers\Wechat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TicketReceiveController extends Controller
{
    private string $token = 'c3kGs6nYUQGpUGGqiKPe6VpELB70gT9UC9MJqv56';

    public function receive(Request $request): void
    {
        $params = $request->all();
        $bodyXml = $request->getContent();
        $bodyObj = simplexml_load_string($bodyXml,'SimpleXMLElement', LIBXML_NOCDATA);
        $bodyObj = json_encode($bodyObj);
        $bodyArr = json_decode($bodyObj,true);
        $verify = [$params['timestamp'], $params['nonce'], $this->token, $bodyArr['Encrypt']];
        natcasesort($verify);
//        var_dump($verify);
//        var_dump(implode($verify));
        $verify = sha1(implode($verify));

        echo $verify;
    }
}
