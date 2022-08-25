<?php

switch($_REQUEST["action"]) {
    case 'register':
        $name = $_POST["name"];
        $street = $_POST["street"];
        $number_street = $_POST["number_street"];
        $district = $_POST["district"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        
        echo "ola sou eu dnv";

        $sql = "INSERT INTO crud_php ('name, street, number_street, district, city, state') VALUE ('{$name}, {$street}, {$number_street}, {$district}, {$city}, {$state}')";
        break;

        $res = $conn->query($sql);

        if($res==true){
            echo "<script>alert('Successful registration');</script>";
            echo "<script>location.href='$page=list';</script>";
        } else {
            echo "<script>alert('Registration not carried out');</script>";
            echo "<script>location.href='$page=list';</script>";
        }
        break;

    case 'edit':
        $name = $_POST["name"];
        $street = $_POST["street"];
        $number_street = $_POST["number_street"];
        $district = $_POST["district"];
        $city = $_POST["city"];
        $state = $_POST["state"];

        $sql = "UPDATE crud_php SET 
                    name='{$name}',
                    street='{$street}',
                    number_street='{$number_street}',
                    district='{$district}',
                    city='{$city}',
                    state='{$state}'
                WHERE
                    id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Successful edited');</script>";
            print "<script>location.href='$page=list';</script>";
        } else {
            print "<script>alert('Could not edit');</script>";
            print "<script>location.href='$page=list';</script>";
        }

        break;

    case 'delete':
        $sql = "DELETE FROM crud_php WHERE id=".$_REQUEST["id"];
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Successfully deleted');</script>";
            print "<script>location.href='$page=list';</script>";
        } else {
            print "<script>alert('It was not possible to exclude');</script>";
            print "<script>location.href='$page=list';</script>";
        }
        break;
}

?>