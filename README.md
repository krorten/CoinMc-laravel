# CoinMc-laravel 
[![PHP version](https://badge.fury.io/ph/andskur%2Fcoinmc.svg)](https://badge.fury.io/ph/andskur%2Fcoinmc)
[![Latest Stable Version](https://poser.pugx.org/andskur/coinmc/v/stable)](https://packagist.org/packages/andskur/coinmc)

**CoinMc-laravel** is a sCoinMarketCap.com api wrapper for Laravel 5.5 Updated from andskur/coinmc(so all credits to him)

## Install

    composer require krorten/coinmc

    You will have to add this repositorie as vcs
### Configuration

After installing, register the `Kroten\CoinMc\CoinMcServiceProvide` in your `config/app.php` configuration file:

```php
'providers' => [
    // Other service providers...

    Krorten\CoinMc\CoinMcServiceProvider::class,
],
```

Also, add the `CoinMc` facade to the `aliases` array in your `app` configuration file:

```php
'CoinMc' => Krorten\CoinMc\CoinMcFacade::class,
```

### Usage

```php
<?php

namespace App\Http\Controllers;

use CoinMc;

class SomeController extends Controller
{
    public function index(CoinMc $coinmc)
    {

        // Get CoinMarketCap tickers sorting by 24h volume
		$coinmc->getTicker();

		// Get ticker for specific coin
		$coin = 'bitcoin';
		$coinmc->tickerCoin($coin);

		// Get global data
		$coinmc->globalData();
    }
}
```

See the [API documentation](https://coinmarketcap.com/api/) for more information about the endpoints and responses.

## License

CoinMc-laravel is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)