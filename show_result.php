<?php
session_start();
include("database.php");

if(isset($_POST["RC"]) && isset($_POST["RN"])){

    $rc=$_POST["RC"];
    $rn=$_POST["RN"];
$sql="SELECT * FROM `results` WHERE (`ROLLCODE`=$rc AND `ROLLNO`=$rn);";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    echo mysqli_num_rows($result);
    $data=mysqli_fetch_assoc($result);
    $_SESSION["ID"]="ALLOW";
    $_SESSION["NAME"]=strtoupper($data['STU_NAME']);
    $_SESSION["ROLLCODE"]=$data['ROLLCODE'];
    $_SESSION["ROLLNO"]=$data['ROLLNO'];
    $_SESSION["MOTHER"]=strtoupper($data['MOTHER']);
    $_SESSION["FATHER"]=strtoupper($data['FATHER']);
    $_SESSION["COLLEGE"]=strtoupper($data['COLLEGE']);
    // $_SESSION["COLLEGE"]=$data['COLLEGE'];

   function grade($sub,$pra){
    $GRADE="+A";
    $SUM=$sub+$pra;
    if($SUM>=90)
    {
        $GRADE="+A";
    }else if($SUM>=80)
    {
        $GRADE="A";
    }else  if($SUM>=70)
    {
        $GRADE="B";
    }else  if($SUM>=60)
    {
        $GRADE="C";
    }else  if($SUM<60)
    {
        $GRADE="D";
    } 

    return $GRADE;
   }



    $_SESSION['ENA']=$data['ENA'];
    $_SESSION['P_ENA']=$data['P_ENA'];
    $_SESSION['PHY']=$data['PHY'];
    $_SESSION['P_PHY']=$data['P_PHY'];
    $_SESSION['CHE']=$data['CHE'];
    $_SESSION['P_CHE']=$data['P_CHE'];

    if($data['BIO']!=0){
        $_SESSION['BIO']=$data['BIO'];
        $_SESSION['P_BIO']=$data['P_BIO'];
        $_SESSION['G_BIO']=grade($data['BIO'],$data['P_BIO']);
    }else{
        $_SESSION['MAT']=$data['MAT'];
        $_SESSION['P_MAT']=$data['P_MAT'];
        $_SESSION['G_MAT']=grade($data['MAT'],$data['P_MAT']);
    }
   



   if($data['CMS']!=0){
        $_SESSION['CMS']=$data['CMS'];
        $_SESSION['P_CMS']=$data['P_CMS'];
        $_SESSION['G_CMS']=grade($data['CMS'],$data['P_CMS']);
    }else if($data['ECO']!=0){
        $_SESSION['ECO']=$data['ECO'];
        $_SESSION['P_ECO']=$data['P_ECO'];
        $_SESSION['G_ECO']=grade($data['ECO'],$data['P_ECO']);
    }else  if($data['MAT']!=0){
        $_SESSION['MAT']=$data['MAT'];
        $_SESSION['P_MAT']=$data['P_MAT'];
        $_SESSION['G_MAT']=grade($data['MAT'],$data['P_MAT']);
    }
   
  
    $TOTAL =$data['ENA']+$data['P_ENA']+$data['PHY']+$data['P_PHY']+$data['CHE']+$data['P_CHE']+$data['BIO']+$data['P_BIO']+$data['MAT']+$data['P_MAT']+$data['ECO']+$data['P_ECO']+$data['CMS']+$data['P_CMS'];


    $_SESSION['G_ENA']=grade($data['ENA'],$data['P_ENA']);
    $_SESSION['G_PHY']=grade($data['PHY'],$data['P_PHY']);
    $_SESSION['G_CHE']=grade($data['CHE'],$data['P_CHE']);
  
    



    $_SESSION['TOTAL']=$TOTAL;
    $Perc=($TOTAL*100)/500;
    $_SESSION['PERCENTAGE']=$Perc;

    if($Perc>=60){
        $_SESSION['DIV']="FIRST DIV.";
    }else if($Perc>=50)
    {
        $_SESSION['DIV']="SECOND DIV.";
    }else if($Perc>=33)
    {
        $_SESSION['DIV']="THIRD DIV.";
    }else{
        $_SESSION['DIV']="FALL";
    }




}else{
    echo 0;
}







}  


?>