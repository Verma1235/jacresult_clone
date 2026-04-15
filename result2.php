<?php
session_start();
if (isset($_SESSION['ID'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Home | Jharkhand Academic Council</title>

        <link rel="icon" href="images/jac_logo-removebg-preview.png" type="image/icon type">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

        <style>
            body {
                background: white;
                color: black;
                font-family: sans-serif;
            }

            /* Device Oriented Adjustments for Top Bar */
            @media only screen and (max-width: 768px) {
                #navtopbar .container-fluid {
                    flex-direction: column;
                    text-align: center;
                }

                .government-text {
                    font-size: 11px;
                }

                .top-links-ul {
                    justify-content: center !important;
                    margin-top: 10px;
                }
            }

            #navtopbar {
                transition: all 0.3s;
            }

            .headerbar {
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 1000;
            }
        </style>

        <script>
            $(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 100) { $(".topsec").addClass('headerbar'); }
                    else { $(".topsec").removeClass('headerbar'); }
                });

                // Accessibility: Font Resizing Logic
                let size = 15;
                $("#up").click(function (e) {
                    e.preventDefault();
                    if (size < 25) { size += 2; $("body").css("font-size", size + "px"); }
                });
                $("#down").click(function (e) {
                    e.preventDefault();
                    if (size > 12) { size -= 2; $("body").css("font-size", size + "px"); }
                });
                $("#default").click(function (e) {
                    e.preventDefault();
                    size = 15; $("body").css("font-size", "");
                });
            });
        </script>
    </head>

    <body>
        <form method="post" action="./view-class-xi-2026-result" id="form1">
            <nav class="topsec navbar navbar-dark p-2" id="navtopbar" style="background:#800000">
                <div class="container-fluid d-flex flex-wrap justify-content-between align-items-center">

                    <a class="d-flex align-items-center text-decoration-none" target="_blank"
                        href="https://www.jharkhand.gov.in/">
                        <img src="images/Jharkhand_Rajakiya_Chihna.png" height="30" class="mr-2">
                        <h6 class="text-uppercase mb-0 government-text" style="color: white; font-size: 13px;">
                            Government of Jharkhand | Jharkhand Academic Council
                        </h6>
                    </a>

                    <div class="top-links-wrapper">
                        <ul class="nav top-links-ul align-items-center" style="font-size: 13px;">
                            <li class="nav-item"><a class="nav-link text-white p-1 px-2" href="/">Skip to Content</a></li>
                            <li class="nav-item d-none d-md-block">
                                <a class="nav-link text-white p-1 px-2" href="#"><i class="fa fa-volume-up mr-1"></i>Screen
                                    Access</a>
                            </li>
                            <li class="nav-item d-flex ml-2">
                                <button type="button" class="btn btn-sm btn-dark border-white mr-1"
                                    id="blackbutton">A</button>
                                <button type="button" class="btn btn-sm btn-light" id="whitebutton"
                                    style="display:none;">A</button>
                            </li>
                            <li class="nav-item d-flex ml-2 text-white align-items-center">
                                <a href="#" class="text-white mx-1" id="up">A+</a>
                                <a href="#" class="text-white mx-1" id="down">A-</a>
                                <a href="#" class="text-white mx-1" id="default">A</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <header class="py-3">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-3 text-center">
                            <img src="images/jac_logo.png" alt="JAC Logo" class="img-fluid" style="max-height: 100px;">
                        </div>
                        <div class="col-md-9 text-center text-md-left mt-3 mt-md-0">
                            <h4 class="font-weight-bold mb-1">JHARKHAND ACADEMIC COUNCIL, RANCHI</h4>
                            <h6 class="mb-1">Gyandeep Campus, Bargawan, Namkum, Ranchi - 834010</h6>
                            <h5 class=" font-weight-bold" style="color:black">Annual Intermediate (Science) Examination - 2026</h5>
                        </div>
                    </div>
                </div>
            </header>

            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #800000;">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link text-white" href="/jacresults">Home</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div style="height: 5px; background-color: #FFBC79;"></div>

            <div class="homeannounce pt-3 pb-4 bodycontainer bodycontainer2 bodycontainer3" style="margin-bottom:70px">
                <div class="container" style="">

                    <style>
                        @media print {
                            body * {
                                visibility: hidden !important;
                                color: black;
                                background: white;
                            }

                            #printArea,
                            #printArea * {
                                visibility: visible !important;
                            }

                            #printArea {
                                position: absolute;
                                left: 0;
                                top: 0;
                                width: 100vw;
                                background: white;
                                z-index: 9999;
                            }

                            .no-print {
                                display: none !important;
                            }

                            @page {
                                size: landscape;
                                margin: 0mm;
                            }

                            .page-break {
                                page-break-before: always;
                            }
                        }

                        p,
                        div,
                        hr,
                        ul,
                        li,
                        tr,
                        td,
                        tbody,
                        table {
                            border-spacing: 0px;
                            border-collapse: collapse;
                            margin: 0px;
                            padding: 0px;
                        }
                    </style>
                    <div class="row" id="printArea" style="width: 297mm; height: 210mm; display: block">
                        <div class="row">
                            <div class="page-break">
                                <div id="content" style="margin-bottom: 40px; padding-bottom: 20px">
                                    <div style="margin-left: 50px; margin-right: 10px">
                                        <table style="font-size: 10px; width: 100%; margin-bottom: 3px">
                                            <tr>
                                                <td style="width: 42%">
                                                    <span id="ContentPlaceHolder1_lblcurrentdatetime">
                                                        <?php
                                                        date_default_timezone_set("Asia/Kolkata"); // optional but recommended
                                                    
                                                        echo date("d/m/Y h:i:s A");
                                                        ?>
                                                    </span>
                                                </td>
                                                <td>Jharkhand Academic Council Result</td>
                                            </tr>
                                        </table>
                                        <div style="border: 4px double black; padding: 3px 20px 10px 20px">
                                            <table style="width: 100%; margin-bottom: 10px">
                                                <tbody>
                                                    <tr>
                                                        <!-- Logo -->
                                                        <td style="width: 10%; vertical-align: top">
                                                            <img src="images/jac_logo.png"
                                                                style="height: 93px; margin-left: 40px; margin-top: 10px" />
                                                        </td>

                                                        <!-- Header Text -->
                                                        <td style="text-align: center">
                                                            <div>
                                                                <p
                                                                    style="font-size: 16px; text-align: center; margin-left: 40px; margin-top: 5px;">
                                                                    झारखण्ड अधिविद्य परिषद्,राँची
                                                                </p>
                                                                <p
                                                                    style="font-size: 20px; text-align: center; font-weight: 600; margin-left: 23px; font-family: Algerian; margin-top: 2px; margin-bottom: 8px">
                                                                    Jharkhand Academic Council, Ranchi
                                                                </p>
                                                                <p style="font-size: 18px; margin: 3px 0;">
                                                                    Annual Intermediate (Science)
                                                                </p>
                                                                <p
                                                                    style="font-size: 16px; text-align: center; margin: 3px 0px">
                                                                    Examination - 2026
                                                                </p>
                                                                <p
                                                                    style="font-size: 18px; font-weight: bold; text-decoration: underline;">
                                                                    अंक-पत्र (Marks Statement)
                                                                </p>
                                                            </div>
                                                        </td>

                                                        <!-- Serial Number -->
                                                        <td
                                                            style="width: 15%; text-align: left; vertical-align: top; font-size: 14px; font-weight: bold;">
                                                            <p style="margin-left: -80px; margin-top: 40px">

                                                                <span id="ContentPlaceHolder1_lblserialno"></span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table
                                                style="width: 100%; border-collapse: collapse; border: 1px solid black; font-size: 12px;">
                                                <tr>
                                                    <td style="padding: 3px; border: 1px solid black; font-weight: 600;">
                                                        Roll Code :<br />
                                                        <p style="margin-left: 20px">
                                                            <span id="ContentPlaceHolder1_lblrollcode"><?php if (isset($_SESSION["ROLLCODE"])) {
                                                                echo $_SESSION["ROLLCODE"];
                                                            } ?></span>
                                                        </p>
                                                    </td>
                                                    <td style="padding: 3px; border: 1px solid black; font-weight: 600;">
                                                        Roll Number :<br />
                                                        <p style="margin-left: 20px">
                                                            <span id="ContentPlaceHolder1_lblrollno"><?php if (isset($_SESSION["ROLLNO"])) {
                                                                echo $_SESSION["ROLLNO"];
                                                            } ?></span>
                                                        </p>
                                                    </td>
                                                    <td style="padding: 3px; border: 1px solid black; font-weight: 600;">
                                                        Registration No. :<br />
                                                        <p style="margin-left: 20px">
                                                            <span id="ContentPlaceHolder1_lblregNo"><?php if(isset($_SESSION["ROLLCODE"])){echo $_SESSION['ROLLCODE'].'-RS-'.substr($_SESSION['ROLLNO'],-4).'-24';  }   ?></span>
                                                        </p>
                                                    </td>
                                                    <td style="padding: 3px; border: 1px solid black; font-weight: 600;">
                                                        Faculty :<br />
                                                        <p style="margin-left: 20px">
                                                            <span id="ContentPlaceHolder1_lblfaculty">SCIENCE</span>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4"
                                                        style="padding: 3px; border: 1px solid black; font-weight: 600;">
                                                        College / +2 School's Name :
                                                        <br />
                                                        <p style="margin-left: 23px">
                                                            <span id="ContentPlaceHolder1_lblschoolname"><?php if (isset($_SESSION["COLLEGE"])) {
                                                                echo $_SESSION["COLLEGE"];
                                                            } ?></span>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4"
                                                        style="padding: 3px; border: 1px solid black; font-weight: 600;">
                                                        Student's Name :
                                                        <br />
                                                        <p style="margin-left: 23px">
                                                            <span id="ContentPlaceHolder1_lblstudentname"><?php if (isset($_SESSION["NAME"])) {
                                                                echo $_SESSION["NAME"];
                                                            } ?></span>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"
                                                        style="width: 50%; padding: 3px; border: 1px solid black; font-weight: 600;">
                                                        Father's Name :
                                                        <br />
                                                        <p style="margin-left: 23px">
                                                            <span id="ContentPlaceHolder1_lblfather"><?php if (isset($_SESSION["FATHER"])) {
                                                                echo $_SESSION["FATHER"];
                                                            } ?></span>
                                                        </p>
                                                    </td>
                                                    <td colspan="2"
                                                        style="padding: 3px; border: 1px solid black; font-weight: 600; border-bottom: 0px;">
                                                        Mother's Name :
                                                        <br />
                                                        <p style="margin-left: 23px">
                                                            <span id="ContentPlaceHolder1_lblmother"><?php if (isset($_SESSION["MOTHER"])) {
                                                                echo $_SESSION["MOTHER"];
                                                            } ?></span>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                            <table style="width: 100%; border-collapse: collapse; font-size: 12px">
                                                <tr>
                                                    <td
                                                        style="width: 10%; padding: 3px; border: 1px solid black; text-align: left; font-weight: 600; border-top: 0px;">
                                                        Sl. No.
                                                    </td>
                                                    <td
                                                        style="width: 20%; padding: 3px; border: 1px solid black; font-weight: 600; border-top: 0px;">
                                                        Subject Code
                                                    </td>
                                                    <td
                                                        style="width: 10%; padding: 3px; border: 1px solid black; text-align: center; font-weight: 600; border-top: 0px;">
                                                        Full Marks
                                                    </td>
                                                    <td
                                                        style="width: 10%; padding: 3px; border: 1px solid black; text-align: center; font-weight: 600; border-top: 0px;">
                                                        Theory
                                                    </td>
                                                    <td
                                                        style="width: 10%; padding: 3px; border: 1px solid black; text-align: center; font-weight: 600; border-top: 0px;">
                                                        Prac./Ass./CEE
                                                    </td>
                                                    <td
                                                        style="width:15%;padding: 3px; border: 1px solid black; text-align: center; font-weight: 600; border-top: 0px;">
                                                        Marks Obtained
                                                    </td>
                                                    <td
                                                        style="padding: 3px; border: 1px solid black; text-align: center; font-weight: 600; border-top: 0px;">
                                                        Remarks
                                                    </td>
                                                </tr>
                                                <tr id="ContentPlaceHolder1_sub_1">
                                                    <td style="padding: 3px; border: 1px solid black">1.</td>
                                                    <td style="padding: 3px; border: 1px solid black">
                                                        <span id="ContentPlaceHolder1_lblsub1name">ENGLISH A</span>
                                                    </td>
                                                    <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                        <span id="ContentPlaceHolder1_lblsub1fullmarks">100</span>
                                                    </td>
                                                    <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                        <span id="ContentPlaceHolder1_lblSub1TotMarks"><?php if (isset($_SESSION["ENA"])) {
                                                            echo $_SESSION["ENA"];
                                                        } ?></span>
                                                    </td>
                                                    <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                        <span id="ContentPlaceHolder1_lblSub1TotMarks"><?php if (isset($_SESSION["P_ENA"])) {
                                                            echo $_SESSION["P_ENA"];
                                                        } ?></span>
                                                    </td>
                                                    <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                        <span id="ContentPlaceHolder1_lblSub1TotMarks"><?php if (isset($_SESSION["ENA"], $_SESSION["P_ENA"])) {
                                                            echo $_SESSION["ENA"] + $_SESSION["P_ENA"];
                                                        } ?></span>
                                                    </td>
                                                    <td rowspan="6"
                                                        style="padding: 3px; border: 1px solid black; text-align: center;">
                                                        <span id="ContentPlaceHolder1_lblResult">PROMOTED</span>
                                                    </td>
                                                </tr>

                                                <tr id="ContentPlaceHolder1_sub_2">
                                                    <td style="padding: 3px; border: 1px solid black">2.</td>
                                                    <td style="padding: 3px; border: 1px solid black">
                                                        <span id="ContentPlaceHolder1_lblSub2Name">PHYSICS</span>
                                                    </td>
                                                    <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                        <span id="ContentPlaceHolder1_lblsub1fullmarks">100</span>
                                                    </td>
                                                    <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                        <span id="ContentPlaceHolder1_lblSub1TotMarks"><?php if (isset($_SESSION["PHY"])) {
                                                            echo $_SESSION["PHY"];
                                                        } ?></span>
                                                    </td>
                                                    <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                        <span id="ContentPlaceHolder1_lblSub1TotMarks"><?php if (isset($_SESSION["P_PHY"])) {
                                                            echo $_SESSION["P_PHY"];
                                                        } ?></span>
                                                    </td>
                                                    <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                        <span id="ContentPlaceHolder1_lblSub1TotMarks"><?php if (isset($_SESSION["PHY"], $_SESSION["P_PHY"])) {
                                                            echo $_SESSION["PHY"] + $_SESSION["P_PHY"];
                                                        } ?></span>
                                                    </td>
                                                </tr>

                                                <tr id="ContentPlaceHolder1_sub_3">
                                                    <td style="padding: 3px; border: 1px solid black">3.</td>
                                                    <td style="padding: 3px; border: 1px solid black">
                                                        <span id="ContentPlaceHolder1_lblSub3Name">CHEMISTRY</span>
                                                    </td>
                                                    <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                        <span id="ContentPlaceHolder1_lblsub1fullmarks">100</span>
                                                    </td>
                                                    <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                        <span id="ContentPlaceHolder1_lblSub1TotMarks"><?php if (isset($_SESSION["CHE"])) {
                                                            echo $_SESSION["CHE"];
                                                        } ?></span>
                                                    </td>
                                                    <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                        <span id="ContentPlaceHolder1_lblSub1TotMarks"><?php if (isset($_SESSION["P_CHE"])) {
                                                            echo $_SESSION["P_CHE"];
                                                        } ?></span>
                                                    </td>
                                                    <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                        <span id="ContentPlaceHolder1_lblSub1TotMarks"><?php if (isset($_SESSION["CHE"], $_SESSION["P_CHE"])) {
                                                            echo $_SESSION["CHE"] + $_SESSION["P_CHE"];
                                                        } ?></span>
                                                    </td>
                                                </tr>
                                                <!-- MAT / BIO  -->
                                                <tr id="ContentPlaceHolder1_sub_4">
                                                    <?php if (isset($_SESSION['MAT'])) { ?>
                                                        <td style="padding: 3px; border: 1px solid black">4.</td>
                                                        <td style="padding: 3px; border: 1px solid black">
                                                            <span id="ContentPlaceHolder1_lblSub4Name">MATHEMATICS</span>
                                                        </td>
                                                        <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                            <span id="ContentPlaceHolder1_lblsub1fullmarks">100</span>
                                                        </td>
                                                        <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                            <span id="ContentPlaceHolder1_lblSub1TotMarks"><?php if (isset($_SESSION["MAT"])) {
                                                                echo $_SESSION["MAT"];
                                                            } ?></span>
                                                        </td>
                                                        <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                            <span id="ContentPlaceHolder1_lblSub1TotMarks"><?php if (isset($_SESSION["P_MAT"])) {
                                                                echo $_SESSION["P_MAT"];
                                                            } ?></span>
                                                        </td>
                                                        <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                            <span id="ContentPlaceHolder1_lblSub1TotMarks"><?php if (isset($_SESSION["MAT"], $_SESSION["P_MAT"])) {
                                                                echo $_SESSION["MAT"] + $_SESSION["P_MAT"];
                                                            } ?></span>
                                                        </td>
                                                    <?php } elseif (isset($_SESSION['BIO'])) { ?>

                                                        <td style="padding: 3px; border: 1px solid black">4.</td>
                                                        <td style="padding: 3px; border: 1px solid black">
                                                            <span id="ContentPlaceHolder1_lblSub4Name">BIOLOGY</span>
                                                        </td>
                                                        <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                            <span id="ContentPlaceHolder1_lblsub1fullmarks">100</span>
                                                        </td>
                                                        <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                            <span id="ContentPlaceHolder1_lblSub1TotMarks"><?php if (isset($_SESSION["BIO"])) {
                                                                echo $_SESSION["BIO"];
                                                            } ?></span>
                                                        </td>
                                                        <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                            <span id="ContentPlaceHolder1_lblSub1TotMarks"><?php if (isset($_SESSION["P_BIO"])) {
                                                                echo $_SESSION["P_BIO"];
                                                            } ?></span>
                                                        </td>
                                                        <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                            <span id="ContentPlaceHolder1_lblSub1TotMarks"><?php if (isset($_SESSION["BIO"], $_SESSION["P_BIO"])) {
                                                                echo $_SESSION["BIO"] + $_SESSION["P_BIO"];
                                                            } ?></span>
                                                        </td>
                                                    <?php } ?>
                                                </tr>
                                                <!-- CMS / ECO  -->
                                                <tr id="ContentPlaceHolder1_sub_5">
                                                    <?php if (isset($_SESSION['CMS'])) { ?>

                                                        <td style="padding: 3px; border: 1px solid black">5.</td>
                                                        <td style="padding: 3px; border: 1px solid black">
                                                            <span id="ContentPlaceHolder1_lblSub5Name">COMPUTER SCIENCE</span>
                                                        </td>
                                                        <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                            <span id="ContentPlaceHolder1_lblsub1fullmarks">100</span>
                                                        </td>
                                                        <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                            <span id="ContentPlaceHolder1_lblSub1TotMarks"><?php if (isset($_SESSION["CMS"])) {
                                                                echo $_SESSION["CMS"];
                                                            } ?></span>
                                                        </td>
                                                        <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                            <span id="ContentPlaceHolder1_lblSub1TotMarks"><?php if (isset($_SESSION["P_CMS"])) {
                                                                echo $_SESSION["P_CMS"];
                                                            } ?></span>
                                                        </td>
                                                        <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                            <span id="ContentPlaceHolder1_lblSub1TotMarks"><?php if (isset($_SESSION["CMS"], $_SESSION["P_CMS"])) {
                                                                echo $_SESSION["CMS"] + $_SESSION["P_CMS"];
                                                            } ?></span>
                                                        </td>
                                                    <?php } elseif (isset($_SESSION['ECO'])) { ?>
                                                        <td style="padding: 3px; border: 1px solid black">5.</td>
                                                        <td style="padding: 3px; border: 1px solid black">
                                                            <span id="ContentPlaceHolder1_lblSub5Name">ECONOMICS</span>
                                                        </td>
                                                        <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                            <span id="ContentPlaceHolder1_lblsub1fullmarks">100</span>
                                                        </td>
                                                        <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                            <span id="ContentPlaceHolder1_lblSub1TotMarks"><?php if (isset($_SESSION["ECO"])) {
                                                                echo $_SESSION["ECO"];
                                                            } ?></span>
                                                        </td>
                                                        <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                            <span id="ContentPlaceHolder1_lblSub1TotMarks"><?php if (isset($_SESSION["P_ECO"])) {
                                                                echo $_SESSION["P_ECO"];
                                                            } ?></span>
                                                        </td>
                                                        <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                            <span id="ContentPlaceHolder1_lblSub1TotMarks"><?php if (isset($_SESSION["ECO"], $_SESSION["P_ECO"])) {
                                                                echo $_SESSION["ECO"] + $_SESSION["P_ECO"];
                                                            } ?></span>
                                                        <?php } ?>


                                                </tr>




                                                <tr>
                                                    <td colspan="5" style="padding: 3px; border: 1px solid black;">
                                                        <div
                                                            style="margin-right: 50px; font-weight: 600; text-align: right;">
                                                            AGGREGATE MARKS</div>
                                                    </td>
                                                    <td style="padding: 3px; border: 1px solid black; text-align: center;">
                                                        <span id="ContentPlaceHolder1_lbltotal_marks"><?php if (isset($_SESSION["TOTAL"])) {
                                                            echo $_SESSION["TOTAL"];
                                                        } ?></span>
                                                    </td>
                                                </tr>
                                            </table>
                                            <table
                                                style="width: 100%; border-collapse: collapse; font-size: 12px; margin-top: 10px;">
                                                <tr>
                                                    <td
                                                        style="font-size: 12px; font-weight: 600; width: 18%; vertical-align: top;">
                                                        Result Description:
                                                    </td>
                                                    <td>
                                                        <table
                                                            style="width: 63.5%; border-collapse: collapse; font-size: 12px;">
                                                            <tr>
                                                                <td
                                                                    style="padding: 3px; border: 1px solid black; font-weight: 600;">
                                                                    PROMOTED = Promoted for higher class.
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    style="padding: 3px; border: 1px solid black; font-weight: 600;">
                                                                    MARGINAL = Detained in same class.
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    style="padding: 3px; border: 1px solid black; font-weight: 600;">
                                                                    INCOMPLETE = I.A Marks not entered by +2 School /
                                                                    College.
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <table
                                                style="width: 100%; border-collapse: collapse; font-size: 10px; margin-top: 30px;">
                                                <tr>
                                                    <td>
                                                        <p style="margin-bottom: -1px; font-weight: 600; margin-top: 18px">
                                                            Date:
                                                            <span id="ContentPlaceHolder1_lbldate">
                                                                <?php
                                                                date_default_timezone_set("Asia/Kolkata"); // optional but recommended
                                                            
                                                                echo date("d-m-Y");
                                                                ?>
                                                            </span>
                                                        </p>
                                                        <p style="font-weight: 600">Place:<span
                                                                id="ContentPlaceHolder1_lblplace">RANCHI</span></p>
                                                    </td>
                                                    <td style="vertical-align: bottom">
                                                        <p style="font-weight: 600; margin-top: 18px">
                                                            Signature of O.A / Class Teacher
                                                        </p>
                                                    </td>
                                                    <td style="vertical-align: bottom">
                                                        <p style="margin-bottom: 3px; font-weight: 600; margin-top: 18px">
                                                            Signature & Seal of Head Master / Principal
                                                        </p>
                                                    </td>
                                                    <td style="vertical-align: bottom; text-align: center">
                                                        <img src="./images/sign.png"
                                                            style="height: 50px; margin-top: -50px" />
                                                        <p style="margin-bottom: -1px; font-weight: 600">Secretary</p>
                                                        <p style="font-weight: 600">
                                                            Jharkhand Academic Council, Ranchi
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div
                                                            style="margin-top: 23px; font-size: 10px; font-weight: 500; line-height: 10px">
                                                            <b>Disclaimer:</b> This marksheet is digitally generated and
                                                            intended solely for immediate information to the candidate.
                                                            The Jharkhand Academic Council, Ranchi shall NOT be held
                                                            responsible for any inadvertent error that may have crept
                                                            into the results being published online. The original
                                                            marksheet issued by the Jharkhand Academic Council, Ranchi
                                                            shall be treated as the authentic and final record for all
                                                            official purposes.
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-print" style="text-align: center">
                            <a href="#"
                                style="padding: 10px; border: 1px double #000; width: 91px; margin: 0 auto; text-transform: uppercase; border-radius: 17px; background: #46b8da; text-decoration: none; color: white; font-weight: bold;"
                                onclick="window.print(); return false;">Print</a>
                        </div>
                    </div>

                    <script>
                        function openPopup(e, url) {
                            e.preventDefault();
                            window.open(url, 'PrintWindow', 'height=1000,width=700,scrollbars=1');
                        }
                    </script>

                </div>
            </div>
            <footer class="mt-5">
                <div class="bg-light p-3 border-top">
                    <div class="container">
                        <small class="text-muted">
                            Disclaimer: This marksheet is digitally generated for immediate information. The original
                            marksheet issued by JAC Ranchi shall be final.
                        </small>
                    </div>
                </div>
                <div class="p-2 text-white text-center" style="background:#800000; font-size:12px;">
                    Copyright © 2026. All Rights Reserved - Jharkhand Academic Council
                </div>
            </footer>
        </form>

        <script>
            // Color Mode Toggle
            $('#blackbutton').on('click', function () {
                $(this).hide(); $('#whitebutton').show();
                $('body').css('background', '#f0f0f0');
                $('.topsec, footer div:last-child').css('background', 'black');
            });
            $('#whitebutton').on('click', function () {
                $(this).hide(); $('#blackbutton').show();
                $('body').css('background', 'white');
                $('.topsec, footer div:last-child').css('background', '#800000');
            });
        </script>
    </body>

    </html>
<?php } ?>