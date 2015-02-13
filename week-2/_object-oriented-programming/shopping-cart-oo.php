<?php


class ShoppingCart
{
    protected $orderTotal;

    protected $discountAmount;

    public function __construct($orderTotal)
    {
        $this->orderTotal = $orderTotal;
    }

    /**
     * @param mixed $discountAmount
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->discountAmount = $discountAmount;
    }


    public function getOrderTotal()
    {
        if (isset($this->discountAmount)) {

            return $this->orderTotal - $this->discountAmount;

        } else {

            return $this->orderTotal;
        }
    }
}


$myCart = new ShoppingCart(12232323.33);
$myCart->setDiscountAmount(5);

echo 'Your order total is: $' . number_format($myCart->getOrderTotal(), 2);

echo '<br/>';

$bigNumber = 131123123.1231231123;
$bigNumber = round($bigNumber, 4, PHP_ROUND_HALF_DOWN);
$result = $bigNumber / 12.232323;
echo round($result, 2);

//$bigNumber = number_format($bigNumber, 2);







//$myStr = 'Foo';
//
//$myStr .= ' is cool';
//
//echo $myStr;