<?php

interface Chargeable
{
    /**
     * @param float $amount
     * @return bool
     */
    public function charge($amount);
}

class PayPal implements Chargeable
{
    /**
     * @param float $amount
     * @return bool
     */
    public function charge($amount)
    {
        echo 'Paypal has your money, and fees';
        return true;
    }
}

class GoogleWallet implements Chargeable
{
    /**
     * @param float $amount
     * @return bool
     */
    public function charge($amount)
    {
        echo 'Google has all your cash';
        return true;
    }

}

class Bank implements Chargeable
{
    /**
     * @param float $amount
     * @return bool
     */
    public function charge($amount)
    {
        echo 'Bank transfer complete';
        return true;
    }
}


class PaymentFactory
{
    /**
     * @param string $paymentMethod Class name of the actual payment method
     * @throws Exception
     * @return Chargeable
     */
    public static function getPaymentMethod($paymentMethod)
    {
        if (class_exists($paymentMethod)) {

            return new $paymentMethod();

        } else {

            throw new Exception('please define '.$paymentMethod);
        }
    }
}

if(isset($_POST['paymentMethod'])){

    try{

        $amount = $_POST['amount'];
        $paymentMethod = $_POST['paymentMethod'];

        $paymentClass = PaymentFactory::getPaymentMethod($paymentMethod);

        $paymentClass->charge($amount);

    }catch(Exception $e){

        echo '<span style="color:red;">An Error has Occurred: '.$e->getMessage().'</span>';
        // Email my devs
    }
}
?>

<form method="post" action="<?php echo($_SERVER['PHP_SELF']);?>">

    <h3>Payment</h3>
    <input type="text" name="amount"/>
    <br/>
    <br/>
    <br/>

    <input type="radio" name="paymentMethod" value="PayPal"/> Paypal
    <input type="radio" name="paymentMethod" value="GoogleWallet"/> Google
    <input type="radio" name="paymentMethod" value="Bank"/> Bank
    <input type="radio" name="paymentMethod" value="euroCash"/> EuroCash

    <br/>
    <br/>
    <br/>

    <input type="submit" value="make payment"/>

</form>