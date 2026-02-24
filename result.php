<?php
session_start();
if (isset($_SESSION['ID'])) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
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
                    <h4 class="jac">JHARKHAND ACADEMIC COUNCIL, RANCHI</h4>
                    <h6 class="result">Results of</h6>
                    <h6 class="exam">Annual Intermediate (Science) Examination - 2026</h6>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container main_cont">
            <table class="table_1">
                <tr>
                    <td colspan="3">Roll Code</td>
                    <td colspan="2" class="data_1"><?php if(isset($_SESSION["ROLLCODE"])) { echo $_SESSION["ROLLCODE"]; } ?></td>
                </tr>
                <tr>
                    <td colspan="3">Roll NO.</td>
                    <td colspan="1" class="data_1"><?php if(isset($_SESSION["ROLLNO"])) { echo $_SESSION["ROLLNO"]; } ?></td>
                </tr>
                <tr>
                    <td colspan="3">Faculty</td>
                    <td colspan="2" class="data_1">Science</td>
                </tr>
                <tr>
                    <td colspan="3">Student's Name</td>
                    <td colspan="2" class="data_1"><?php if(isset($_SESSION["NAME"])) { echo $_SESSION["NAME"]; } ?></td>
                </tr>
                <tr>
                    <td colspan="3">Father's Name</td>
                    <td colspan="2" class="data_1"><?php if(isset($_SESSION["FATHER"])) { echo $_SESSION["FATHER"]; } ?></td>
                </tr>
                <tr>
                    <td colspan="3">Mother's Name</td>
                    <td colspan="2" class="data_1"><?php if(isset($_SESSION["MOTHER"])) { echo $_SESSION["MOTHER"]; } ?></td>
                </tr>
                <tr>
                    <td colspan="3">+2 School/College</td>
                    <td colspan="2" class="data_1"><?php if(isset($_SESSION["COLLEGE"])) { echo $_SESSION["COLLEGE"]; } ?></td>
                </tr>
            </table>

            <table class="table_2">
                <thead>
                    <tr>
                        <th class="th1" colspan="2"><center>Subject Code</center></th>
                        <th class="th1"><center>Theory</center></th>
                        <th class="th1" colspan="2"><center>Prac./Ass./CEE</center></th>
                        <th class="th1"><center>Total</center></th>
                        <th class="th1"><center>Grade</center></th>
                        <th class="th1" colspan="2"><center>Remarks</center></th>
                    </tr>
                </thead>

                <tbody>
                    <!-- ENA -->
                    <tr class="tr_wt">
                        <td class="th2" colspan="2">ENA</td>
                        <th class="th2"><center><?php if(isset($_SESSION["ENA"])) { echo $_SESSION["ENA"]; } ?></center></th>
                        <th class="th2" colspan="2"><center><?php if(isset($_SESSION["P_ENA"])) { echo $_SESSION["P_ENA"]; } ?></center></th>
                        <th class="th2"><center><?php if(isset($_SESSION["ENA"], $_SESSION["P_ENA"])) { echo $_SESSION["ENA"] + $_SESSION["P_ENA"]; } ?></center></th>
                        <th class="th2"><center><?php if(isset($_SESSION["G_ENA"])) { echo $_SESSION["G_ENA"]; } ?></center></th>
                        <th class="th2" colspan="2"><center></center></th>
                    </tr>

                    <!-- PHY -->
                    <tr>
                        <td class="th2" colspan="2">PHY</td>
                        <th class="th2"><center><?php if(isset($_SESSION["PHY"])) { echo $_SESSION["PHY"]; } ?></center></th>
                        <th class="th2" colspan="2"><center><?php if(isset($_SESSION["P_PHY"])) { echo $_SESSION["P_PHY"]; } ?></center></th>
                        <th class="th2"><center><?php if(isset($_SESSION["PHY"], $_SESSION["P_PHY"])) { echo $_SESSION["PHY"] + $_SESSION["P_PHY"]; } ?></center></th>
                        <th class="th2"><center><?php if(isset($_SESSION["G_PHY"])) { echo $_SESSION["G_PHY"]; } ?></center></th>
                        <th class="th2" colspan="2"><center>#</center></th>
                    </tr>

                    <!-- CHE -->
                    <tr class="tr_wt">
                        <td class="th2" colspan="2">CHE</td>
                        <th class="th2"><center><?php if(isset($_SESSION["CHE"])) { echo $_SESSION["CHE"]; } ?></center></th>
                        <th class="th2" colspan="2"><center><?php if(isset($_SESSION["P_CHE"])) { echo $_SESSION["P_CHE"]; } ?></center></th>
                        <th class="th2"><center><?php if(isset($_SESSION["CHE"], $_SESSION["P_CHE"])) { echo $_SESSION["CHE"] + $_SESSION["P_CHE"]; } ?></center></th>
                        <th class="th2"><center><?php if(isset($_SESSION["G_CHE"])) { echo $_SESSION["G_CHE"]; } ?></center></th>
                        <th class="th2" colspan="2"><center></center></th>
                    </tr>

                    <!-- MAT / BIO -->
                    <tr>
                        <?php if (isset($_SESSION['MAT'])) { ?>
                            <td class="th2" colspan="2">MAT</td>
                            <th class="th2"><center><?php echo $_SESSION['MAT']; ?></center></th>
                            <th class="th2" colspan="2"><center><?php echo $_SESSION['P_MAT']; ?></center></th>
                            <th class="th2"><center><?php echo $_SESSION['MAT'] + $_SESSION['P_MAT']; ?></center></th>
                            <th class="th2"><center><?php echo $_SESSION['G_MAT']; ?></center></th>
                            <th class="th2" colspan="2"><center></center></th>
                        <?php } elseif (isset($_SESSION['BIO'])) { ?>
                            <td class="th2" colspan="2">BIO</td>
                            <th class="th2"><center><?php echo $_SESSION['BIO']; ?></center></th>
                            <th class="th2" colspan="2"><center><?php echo $_SESSION['P_BIO']; ?></center></th>
                            <th class="th2"><center><?php echo $_SESSION['BIO'] + $_SESSION['P_BIO']; ?></center></th>
                            <th class="th2"><center><?php echo $_SESSION['G_BIO']; ?></center></th>
                            <th class="th2" colspan="2"><center>#</center></th>
                        <?php } ?>
                    </tr>

                    <!-- CMS / ECO -->
                    <tr class="tr_wt" style="background:white">
                        <?php if (isset($_SESSION['CMS'])) { ?>
                            <td class="th2" colspan="2">CMS</td>
                            <th class="th2"><center><?php echo $_SESSION['CMS']; ?></center></th>
                            <th class="th2" colspan="2"><center><?php echo $_SESSION['P_CMS']; ?></center></th>
                            <th class="th2"><center><?php echo $_SESSION['CMS'] + $_SESSION['P_CMS']; ?></center></th>
                            <th class="th2"><center><?php echo $_SESSION['G_CMS']; ?></center></th>
                            <th class="th2" colspan="2"><center>#</center></th>
                        <?php } elseif (isset($_SESSION['ECO'])) { ?>
                            <td class="th2" colspan="2">ECO</td>
                            <th class="th2"><center><?php echo $_SESSION['ECO']; ?></center></th>
                            <th class="th2" colspan="2"><center><?php echo $_SESSION['P_ECO']; ?></center></th>
                            <th class="th2"><center><?php echo $_SESSION['ECO'] + $_SESSION['P_ECO']; ?></center></th>
                            <th class="th2"><center><?php echo $_SESSION['G_ECO']; ?></center></th>
                            <th class="th2" colspan="2"><center>#</center></th>
                        <?php } ?>
                    </tr>

                    <!-- TOTAL, RESULT, PERCENTAGE -->
                    <tr>
                        <td class="th2" colspan="2">Total Obt. Marks</td>
                        <th class="th2" style="color:red;" colspan="7"><b><?php if(isset($_SESSION["TOTAL"])) { echo $_SESSION["TOTAL"]; } ?></b></th>
                    </tr>
                    <tr class="tr_wt">
                        <td class="th2" colspan="2">Result</td>
                        <th class="th2" style="color:red;" colspan="7"><b><?php if(isset($_SESSION["DIV"])) { echo $_SESSION["DIV"]; } ?></b></th>
                    </tr>
                    <tr>
                        <td class="th2" colspan="2">Marks Percentage</td>
                        <th class="th2" style="color:red;" colspan="7"><b><?php if(isset($_SESSION["PERCENTAGE"])) { echo $_SESSION["PERCENTAGE"]; } ?>%</b></th>
                    </tr>

                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <div class="row mx-auto footer" style="background-color: #ffbc78; box-shadow: 5px 5px 5px 5px #b2a79c; color: black;">
            <p style="margin-left:30px; margin-top:8px;">
                Note: Jharkhand Academic Council, Ranchi is not responsible for any inadvertent error
                that may have crept in the results being published on NET. The results published on net are for
                immediate information to the examinees. These cannot be treated as original marksheets.
                Original marksheets have been issued by the Council separately.
            </p>
        </div>
    </footer>

    <div id="info_msg"></div>

    <script src="js/script.js"></script>
    <script>
        $(document).ready(function () {
            $("#info_msg").hide();
        });
    </script>

</body>
</html>

<?php } // end of session check ?>