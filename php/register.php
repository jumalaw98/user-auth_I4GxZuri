<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    
    // $filename = "../storage/users.csv";
    //     $handle = fopen($filename, "a");
    //     fwrite$handle' $username, $email, $password /n);
    //     fclose($handle);


    // echo "OKAY";
}
echo "User Successfully Registered";


