<?php

interface PaymentInterface {
    public function payNow();
}

interface LoginInterface {
    public function loginFirst();
}

class Paypal implements PaymentInterface, LoginInterface {
    public function loginFirst(){};
    public function payNow(){};
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
}
class Visa implements PaymentInterface, LoginInterface {
    public function paynow(){};
    public function paymentProcess(){
        $this->payNow();
    }
}
class Cash implements PaymentInterface, LoginInterface {
    public function paynow(){};
    public function paymentProcess(){
        $this->payNow();
    }
}
class BuyProduct {
    public function pay(PaymentInterface $payment){
        $payment->paymentProcess();
    }

}

$payment = new Cash;
$buyProduct = new BuyProduct;
$buyProduct->pay($payment)

?>