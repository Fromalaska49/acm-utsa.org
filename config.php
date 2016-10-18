<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_EHk5qcfpLuiUFbXsIsxJILl6",
  "publishable_key" => "pk_test_iJfHyrP1BhsIvaWJEsQ7ojby"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>