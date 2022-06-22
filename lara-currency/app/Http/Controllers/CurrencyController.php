<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use AshAllenDesign\LaravelExchangeRates\ExchangeRate;
use Guzzle\Http\Exception\ClientErrorResponseException;

class CurrencyController extends Controller
{
    public function index()
    {

        return view('currency');
    }

    public function convertCurrency(Request $request, $amount, $from_currency, $to_currency)
    {

        $YOUR_API_KEY = '8010f39b9da3cf55ec3e';

        $from_Currency = urlencode($from_currency);
        $to_Currency = urlencode($to_currency);
        $query = "{$from_Currency}_{$to_Currency}";

        // change to the free URL if you're using the free version
        $json = file_get_contents("https://free.currconv.com/api/v7/convert?q={$query}&compact=y&apiKey=8010f39b9da3cf55ec3e");

        $obj = json_decode($json, true);

        $val = $obj["$query"];

        $total = $val['val'] * 1;

        $formatValue = number_format($total, 2, '.', '');

        $data = "$amount $from_Currency = $to_Currency $formatValue";

        echo $data;
        die;

    }
}
