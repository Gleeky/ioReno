<?php
require "../Classes/Database.php";
session_start();
$db=new Database();
if($db->getCustomerE($_POST['Email'])!= null)
{
    $customer=$db->getCustomerE($_POST['Email']);
    if($customer->get_password()== sha1($_POST["Email"].$_POST['Password']))
    {

        $_SESSION["invalidLogin"]="";

        $_SESSION["login"]=true;
        $_SESSION["customer"]= $customer->get_email();

        header("location:../views/HomeCustomer.php");
    }
    else
    {
        $_SESSION["invalidLogin"]="Invalid login attempt";
        header("location:../views/index.php");
    }
}
else if($db->getContractorE($_POST['Email'])!= null)
{
    
    $contractor=$db->getContractorE($_POST['Email']);
    if ($contractor->get_password()== sha1($_POST["Email"].$_POST['Password']))
    {
        $_SESSION["invalidLogin"]="";
        $_SESSION["login"]=true;
        header("location:../views/HomeContractor.php");
    }
    else
    {
        $_SESSION["invalidLogin"]="Invalid login attempt";
        header("location:../views/index.php");
    }
}
else
{
    $_SESSION["invalidLogin"]="Invalid login attempt";
    header("location:../views/index.php");
}
?>
