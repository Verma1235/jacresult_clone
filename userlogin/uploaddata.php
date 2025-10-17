<?php
include("database.php");

if(isset($_POST['NM'])){


$RC =$_POST['RC'];    
$RN=$_POST['RN'];
$NM  =$_POST['NM'];
$FN  =$_POST['FN'];
$MN  =$_POST['MN'];
$CN  =$_POST['CN'];

$EM  =$_POST['EM'];
$PM  =$_POST['PM'];
$CM  =$_POST['CM'];

$P_EM  =$_POST['P_EM'];
$P_PM  =$_POST['P_PM'];
$P_CM  =$_POST['P_CM'];

$OP1  =$_POST['OP1'];
$OP2  =$_POST['OP2']; 

$OP1M  =$_POST['OP1M'];
$OP2M  =$_POST['OP2M'];

$P_OP1M  =$_POST['P_OP1M'];
$P_OP2M  =$_POST['P_OP2M'];

$PASS  =$_POST['PASS'];

$sql="SELECT * FROM `results` WHERE `ROLLCODE`=$RC AND `ROLLNO`=$RN;";

$chk=mysqli_query($conn,$sql);

if(mysqli_num_rows($chk)>0){
    echo 1;
}else
{
$BIO=0;
$MAT=0;
$CMS=0;
$ECO=0;

$P_BIO=0;
$P_MAT=0;
$P_CMS=0;
$P_ECO=0;



    if($OP1=="BIO")
    {
        $BIO=$OP1M;
        $P_BIO=$P_OP1M;
    }else if($OP1=="MAT"){
        $MAT=$OP1M;
        $P_MAT=$P_OP1M;
    }

    if($OP2=="CMS"){
        $CMS=$OP2M;
        $P_CMS=$P_OP2M;

    }else if($OP2=="ECO"){
        $ECO=$OP2M;
        $P_ECO=$P_OP2M;
    }else  if($OP2="MAT" && $OP1!="MAT" )
    {
        $MAT=$OP2M;
        $P_MAT=$P_OP2M;


    }else {
        echo "please select maths at once";
    }



$sql1="INSERT INTO `results` (`ROLLCODE`, `ROLLNO`, `MOTHER`, `FATHER`, `COLLEGE`, `STU_NAME`, `ENA`, `PHY`, `CHE`, `BIO`, `MAT`, `ECO`, `CMS`, `P_ENA`, `P_PHY`, `P_CHE`, `P_MAT`, `P_BIO`, `P_ECO`, `P_CMS`) VALUES ($RC, $RN, '$MN', '$FN', '$CN', '$NM', $EM, $PM, $CM, $BIO, $MAT, $ECO, $CMS, $P_EM, $P_PM, $P_CM, $P_MAT, $P_BIO, $P_ECO, $P_CMS);";



if($PASS=="DOST"){
$res=mysqli_query($conn,$sql1);

if($res){
    echo 2;
    
}else{
    echo 3;
}

}
else{
    echo 4;
}



}
}






?>