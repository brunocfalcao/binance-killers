<?php

namespace Brunocfalcao\BinanceKillers;

use Binance\APIClient;
use Brunocfalcao\BinanceKillers\Futures\Market;
use Brunocfalcao\BinanceKillers\Futures\Trade;

class Futures extends APIClient
{
    use Market;
    use Trade;

    public function __construct(array $args = [])
    {
        $args['baseURL'] = $args['baseURL'] ?? 'https://fapi.binance.com';
        $args['key'] = env('BINANCE_API_KEY');
        $args['secret'] = env('BINANCE_SECRET_KEY');
        parent::__construct($args);
    }
}
