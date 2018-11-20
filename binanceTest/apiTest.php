<?php
// Works without composer, supports php 5.6
require 'binance-api-single.php';
$api = new Binance("Ru7OspnS8TTdOnvcFI0FSldK0BR68Uyvv4gHCIz1sykM2UrftMI8WneaDFmAWLYn","ybp4092yRvhv2AHEtnqEw053lHxAc7jpDVWd78i93J5k1nVoXD0XrIeLoII2fApn");

// Get latest price of all symbols
//$tickers = $api->prices();
//print_r($tickers); // List prices of all symbols

// Get latest price of a symbol
//$price = $api->price("BNBBTC");
//echo "Price of BNB: {$price} BTC.".PHP_EOL;

// Get balances for all of your positions, including estimated BTC value
//$balances = $api->balances($tickers);
//print_r($balances);
//echo "BTC owned: ".$balances['BTC']['available'].PHP_EOL;
//echo "ETH owned: ".$balances['ETH']['available'].PHP_EOL;
//echo "Estimated Value: ".$api->btc_value." BTC".PHP_EOL;

// Getting 24hr ticker price change statistics for a symbol
$prevDay = $api->prevDay("BTCUSDT");
//print_r($prevDay);
echo "BNB price change since yesterday: ".$prevDay['priceChangePercent']."%".PHP_EOL;

$ticker = $api->prices();
$balances = $api->balances($ticker);
echo "ETH owned: " . $balances['ETH']['available'] . "\n";
