<?php

namespace Brunocfalcao\BinanceKillers\Commands;

use Brunocfalcao\BinanceKillers\Futures;
use Illuminate\Console\Command;

class NewOrderCommand extends Command
{
    protected $signature = 'bk:new-order';

    protected $description = 'Places a new order (test)';

    public function handle()
    {
        //$client = new \Binance\Spot();
        $client = new Futures();

        $response = $client->allOrders('GMXUSDT');

        //$response = $client->getOrder('ONGUSDT', ['orderId' => 930032891]);

        // $response = $client->exchangeInfo();

        dd($response);

        /*
        $client = new \Binance\Spot([
            'key' => env('BINANCE_API_KEY'),
            'secret' => env('BINANCE_SECRET_KEY')
        ]);

        $this->publicRequest('GET', '/sapi/v1/blvt/tokenInfo', $options);

        $response = $client->allOrders('ONGUSDT');
        var_dump($response);
        */
    }
}
