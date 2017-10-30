<?php
$servername="localhost";
$userame="root";
$password="root";
$dbname="accounts";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die('Could not connnect:'.mysqli_connect_error());
}
else
{
    if(isset($_POST['submit']))
    {
        $name=$_POST["name"];
        ///echo $name;
        $sex=$_POST["sex"];
        //echo $sex;
        $email=$_POST["email"];
        $mob_number=$_POST["mob_number"];
        $dob=$_POST["dob"];
        $annual_income=$_POST["annual_income"];
        $occupation=$_POST["occupation"];
        $country=$_POST["country"];
        $state=$_POST["state"];
        $city=$_POST["city"];
        $street=$_POST["street"];
        $pincode=$_POST["pincode"];
        $branch_name=$_POST["branch_name"];
        $amount=$_POST["amount"];
        $account_type=$_POST["account_type"];
        $branch_code=$_POST["branch_code"];
        $password=$_POST["password"];
        
        $insert="insert into user values('$name', '$sex', '$email', '$mob_number', '$dob', '$$annual_income', '$occupation', '$occupation', '$country', '$state', '$city', '$street', '$pincode', '$branch_name', '$amount', '$account_type', '$branch_code', '$password')";
        
        mysqli_query($conn,$insert);
        echo "data inserted";

    }
}

$conn->close();
?>