<?php

    //Update Cart
    include './update-cart.php';

    //Print New Information To Cart Modal
    include './modal-display.php';

    //Display # Of Items In Cart
    //Declaring Total Variables
    $itemCount = 0;

    //Loop(How Many Items In Cart)
    for($index = 0; $index < count($_SESSION['cart']); $index++)
    {
        //Add Items Qty
        $itemCount += $_SESSION['cart'][$index]['qty'];
    }

    //Display Total To Cart (Qty Indicator)
    echo "<script> document.getElementById('items-in-cart').innerHTML = {$itemCount}; </script>";


?>