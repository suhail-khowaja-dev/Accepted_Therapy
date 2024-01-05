<?php

namespace App\Http\Controllers;

use PayPal\ChargeModel;
use PayPal\Currency;
use PayPal\MerchantPreferences;
use PayPal\PaymentDefinition;
use PayPal\Plan;

use Illuminate\Http\Request;

class PayPalController extends Controller
{
    $plan = new Plan();
    $plan->setName('T-Shirt of the Month Club Plan')
    ->setDescription('Template creation.')
    ->setType('fixed');

    $paymentDefinition = new PaymentDefinition();


    $paymentDefinition->setName('Regular Payments')
    ->setType('REGULAR')
    ->setFrequency('Month')
    ->setFrequencyInterval("2")
    ->setCycles("12")
    ->setAmount(new Currency(array('value' => 100, 'currency' => 'USD')));
    
    $chargeModel = new ChargeModel();
$chargeModel->setType('SHIPPING')
    ->setAmount(new Currency(array('value' => 10, 'currency' => 'USD')));


    $paymentDefinition->setChargeModels(array($chargeModel));


}
