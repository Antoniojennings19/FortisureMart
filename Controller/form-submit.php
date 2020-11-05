<?php

    //check post items
    if(isset($_POST['cusName'])){

        //display thank you alert
        echo "
            <script>
            
                alert('Thank you {$_POST['cusName']} for submitting your message. We will review it shortly!');

            </script>
        ";

        //database interaction


        //finally clear data in post
        unset($_POST['cusName']);
        unset($_POST['cusEmail']);
        unset($_POST['cusMessage']);
    }




?>