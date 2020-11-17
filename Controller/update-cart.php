<?php

    //Start the session
    session_start();

    //if a cart session to hold items does not exist
    if(!isset($_SESSION['cart']))
    {
        //create session to be used
        $_SESSION['cart'] = array();
    }

    //if card has been clicked; add item to cart
    if(isset($_POST['code']))
    {
        
        //get info out of POST
        $prodCode = $_POST['code'];
        $prodName = $_POST['name'];
        $prodImg = $_POST['img'];
        $prodPrice = $_POST['price'];

        //get cart array
        $cartArray = $_SESSION['cart'];

        //create variable for storage index; set to next open index by default
        $storeIndex = count($cartArray);

        //loop through cart; to see if item has already been added
        for($index = 0; $index < count($cartArray); $index++)
        {
            //if the item is found to already be stored
            if($cartArray[$index]['code'] == $prodCode)
            {
                $storeIndex = $index;
            }
        }

        //if this item has not been stored
        if(!isset($cartArray[$storeIndex]['code']))
        {
            //store item  info
            $cartArray[$storeIndex]['code'] = $prodCode;
            $cartArray[$storeIndex]['name'] = $prodName;
            $cartArray[$storeIndex]['img'] = $prodImg;
            $cartArray[$storeIndex]['price'] = $prodPrice;

            //set quantity to 1
            $cartArray[$storeIndex]['qty'] = 1;
        }
        else
        {
            //add 1 to qty
            $cartArray[$storeIndex]['qty'] += 1;
        }

        //add cartArray to cart session
        $_SESSION['cart'] = $cartArray;

        //clear post for next input
        $_POST = array();
    }

?>