<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jharkhand Academic Council 2025 - Results Jharkhand State Unit, Ranchi</title>
    <link rel="icon" href="images/jac_logo-removebg-preview.png" type="image/icon type">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
    <header>
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-3 col-sm-3">
                    <div class="logo">
                        <center> <img src="images/jac_logo.png" alt="Jharkhand Academic Council"></center>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 text-center">
                    <h4 class="jac">
                        JHARKHAND ACADEMIC COUNCIL, RANCHI
                    </h4>
                    <h6 class="result">Results of</h6>
                    <h6 class="exam">Annual Intermediate (Science) Examination - 2025 </h6>
                </div>
            </div>
        </div>
    </header>
    <form name="frmres" id="form1">
        <div class="wrapper">
            <div class="box1">
                <div class="box2">
                    <div class="box3">
                        <div class="table-responsive-sm">
                            <table class="table tbody">
                                <tbody>
                                    <tr>
                                        <th scope="col">FACULTY</th>
                                        <th scope="col">SCIENCE</th>
                                    </tr>

                                    <tr>
                                        <td class="roll" scope="row">ROLL CODE</td>
                                        <td><input name="roll_code" class="input-fld rollcode" value size="5"
                                                maxlength="5" autocomplete="off"></td>
                                    </tr>
                                    <tr>
                                        <td class="roll" scope="row">ROLL NUMBER</td>
                                        <td><input name="roll_number" class="input-fld rollno" value size="5"
                                                maxlength="5" autocomplete="off"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row mx-auto" style="margin-top: 40px;">
                            <div class="col-md-6 col text-center">
                                <button class="submit" name="B1" type="submit" value="Submit">Submit</button>
                            </div>
                            <div class="col-md-6 col text-center">
                                <button class="reset" name="B2" type="reset" value="Reset" ondblclick="transfer()">Reset</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <div class="row mx-auto footer"
                    style="background-color: #ffbc78;box-shadow: 5px 5px 5px 5px #b2a79c; color: black;">
                    <p style="margin-left: 30px;margin-top: 8px;">Note: Jharkhand Academic Council, Ranchi is not
                        responsible for any inadvertent error that may have crept in the results being published on NET.
                        The results published on net are for immediate information to the examinees. These cannot be
                        treated as original marksheets. Original marksheets have been issued by the Council separately.
                    </p>
                    <anker></anker>
                </div>
            </footer>
        </div>
    </form>

    <div id="info_msg">
        ngtrngtugntnbg
    </div>


</body>
<script src="js/script.js"></script>
<script>
    $(document).ready(function () {
        $("#info_msg").hide();

    });
</script>


</html>