<?php
if (issert($_POST['email'])) {


    //Email information
    $admin_email = "brad@edgeleadger.net";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


//send email
mail($admin_email, "New Form Submission", $phone, "form:" $email);
}
