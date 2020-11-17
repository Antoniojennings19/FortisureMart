<?php

class customer{
    public function __construct($db){
        $this->conn = $db;
    }

    public function addCustomer($data){
        // Variables
        $firstName = $data['firstName'];
        $lastName = $data['lastName'];
        $address = $data['address'];
        $city = $data['city'];
        $state = $data['state'];
        $postalCode = $data['postalCode'];
        $country = $data['country'];
        $email = $data['email'];
        $phone = $data['phone'];
        $comments = $data['comments'];

        //Query Statement
        $query = "INSERT  INTO customers
                (contactLastName, contactFirstName, phone, addressline1, city, state, postalCode, country, email, comments)
        VALUES ('$lastName', '$firstName', '$address', '$city', '$state', '$postalCode', '$country', '$email', '$phone', '$comments');
        ";

        //Prepare Query Statement
        $results = $this->conn->prepare($query);

        //Execute Statement
        $results->execute();

        //Grab Last ID Created (Last Row Insert)
        return $this->conn->lastInsertId();

    }
}