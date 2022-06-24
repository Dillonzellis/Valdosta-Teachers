<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->



    <title>Valdosta Teachers' FCU | Membership Form</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,700,900,' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,400' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="../lib/font-awesome/font-awesome-4.3.0.min.css">
    <link rel="stylesheet" href="../css/flaticon.min.css">

    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="../lib/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../lib/owl-carousel/owl.theme.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/custom.css">

    <link rel="stylesheet" href="../dist/remodal.css">
    <link rel="stylesheet" href="../dist/remodal-default-theme.css">


    <SCRIPT LANGUAGE="JavaScript">
        function myPrint() {
            if (window.print) {
                if (confirm("Print Page?")) {
                    window.print();
                }
            }
        }
        //
    </SCRIPT>
</head>

<body class="sticky-header">
    <div id="page" class="site">

        <header id="masthead" class="site-header">

            <div id="header-placeholder"></div>

            <div id="header-wrap">

                <div id="actionbar">
                    <? $INC_DIR = $_SERVER["DOCUMENT_ROOT"] . "/";
                    include($INC_DIR . "topbar.html"); ?>
                </div>


                <nav class="navbar">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">

                            <? $INC_DIR = $_SERVER["DOCUMENT_ROOT"] . "/";
                            include($INC_DIR . "logo.html"); ?>

                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-menu-wrap">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="secondary-navigation-wrap">
                            <ul id="secondary-menu" class="nav navbar-nav navbar-right">
                                <li class="hb"><? $INC_DIR = $_SERVER["DOCUMENT_ROOT"] . "/";
                                                include($INC_DIR . "hb.html"); ?></li>

                            </ul>
                        </div><!-- /.navbar-collapse -->

                    </div><!-- /.container -->

                    <div id="primary-navigation-container" class="menu-background-right ">

                        <div class="container boxed-no-gutter">

                            <div class="background-menu"></div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="primary-menu-wrap">
                                <? $INC_DIR = $_SERVER["DOCUMENT_ROOT"] . "/";
                                include($INC_DIR . "nav.html"); ?>
                            </div><!-- .navbar-collapse -->
                        </div><!-- .container -->
                    </div> <!-- #primary-navigation-container -->

                </nav>

                <div class="title-bar">
                    <div class="container">
                        <h1>Membership Form</h1>
                    </div>
                </div>

            </div><!-- #header-wrap -->

        </header><!-- #masthead -->

        <div id="content" class="site-content">


            <div id="breadcrumb">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><a href="/index.php" title="Home">Home</a></li>
                        <li><a href="/forms/index.php" title="Forms">Forms</a></li>
                        <li class="active">Membership Form</li>
                    </ol>
                </div>
            </div>


            <main id="main" class="site-main">
                <div class="container">

                    <div class="row fadeInUp">
                        <div class="col-md-12 wow fadeInUp">
                            <form action="https://www.valdostateachersfcu.org/forms_app/membership_signup.php" target="_blank" method="post">
                                <p><strong>When we receive your request for membership, we will send you a membership packet that will include a membership application and any pertinent credit union disclosure information.</strong></p>
                                <p><label for="001_MEMBER">MEMBER</label> <INPUT type="text" name="001_MEMBER" id="001_MEMBER" size="45"></p>
                                <p><label for="001_PHONE">PHONE</label> <INPUT type="text" name="001_PHONE" id="001_PHONE" size="45" required></p>
                                <p><label for="002_ADDRESS">ADRESS</label> <INPUT type="text" name="002_ADDRESS" id="002_ADDRESS" size="45"></p>
                                <p><label for="003_CITY">CITY</label> <INPUT type="text" name="003_CITY" id="003_CITY" size="25"></p>
                                <p><label for="004_STATE">STATE</label> <INPUT type="text" name="004_STATE" id="004_STATE" size="10"> <label for="005_ZIP">ZIP</label> <INPUT type="text" name="005_ZIP" id="005_ZIP" size="10"></p>
                                <p><label for="006_EMPLOYMENT">EMPLOYMENT</label> <INPUT type="text" name="006_EMPLOYMENT" id="006_EMPLOYMENT" size="45"></p>
                                <p><label for="007_ELIGIBILITY">ELIGIBILITY FOR MEMBERSHIP</label> <INPUT type="text" name="007_ELIGIBILITY" id="007_ELIGIBILITY" size="45"></p>


                                <hr>
                                <p><strong>Account Type</strong></p>
                                <p><INPUT type="radio" name="012_ACCOUNTTYPE" value="SHARE" aria-label="Share/Savings">
                                    SHARE/SAVINGS </p>
                                <p>
                                    <INPUT type="radio" name="012_ACCOUNTTYPE" value="IRA" aria-label="IRA">
                                    IRA
                                </p>
                                <p>
                                    <INPUT type="radio" name="012_ACCOUNTTYPE" value="HOLIDAY SAVINGS" aria-label="Christmas Club Savings">
                                    CHRISTMAS CLUB SAVINGS
                                </p>
                                <p>
                                    <INPUT type="radio" name="012_ACCOUNTTYPE" value="TERM SHARE" aria-label="Term Share">
                                    TERM SHARE/CERTIFICATE
                                </p>
                                <p>
                                    <INPUT type="radio" name="012_ACCOUNTTYPE" value="OTHER" aria-label="Other Type">
                                    OTHER <INPUT name="013_OtherAccountType" type="text" id="013_OtherAccountType" size="25" aria-label="Please list other type">
                                </p>

                                <p align="center"><INPUT type="reset" name="Reset" value="Reset ">&nbsp;&nbsp;<input type="submit" name="Submit" value="Submit">&nbsp;&nbsp;<script language="JavaScript">
                                        if (window.print)
                                            document.write('<FORM><INPUT TYPE="BUTTON" VALUE="Print" onClick="myPrint()"><\/FORM>'); //
                                    </script>
                                </p>
                            </form>

                            <div class="margin-30"></div>
                        </div>
                    </div>

                </div>
                <!-- /.container -->
            </main>



        </div> <!-- /#content -->

        <footer id="footer" class="site-footer">

            <div id="footer-widget-container">
                <? $INC_DIR = $_SERVER["DOCUMENT_ROOT"] . "/";
                include($INC_DIR . "footer1.html"); ?>
            </div>

            <div id="site-info">
                <? $INC_DIR = $_SERVER["DOCUMENT_ROOT"] . "/";
                include($INC_DIR . "footer2.html"); ?>
            </div><!-- .site-info -->
        </footer><!-- #footer -->
    </div> <!-- /#page -->





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins and Tructor JavaScript) -->
    <script src="../js/jquery-1.11.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../lib/stellar/jquery.stellar.min.js"></script>

    <link rel="stylesheet" href="../css/animate.min.css">
    <script src="../js/wow.min.js"></script>



    <script src="../lib/owl-carousel/owl.carousel.min.js"></script>
    <script>
        'use strict';

        var carousel = $(".our-reviews");

        carousel.owlCarousel({
            navigation: false,
            slideSpeed: 1000,
            paginationSpeed: 1000,
            singleItem: true,
            autoPlay: 8000
        });
    </script>

    <script src="../js/scripts.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="../libs/jquery/dist/jquery.min.js"><\/script>')
    </script>
    <script src="../dist/remodal.js"></script>

    <!-- Events -->
    <script>
        $(document).on('opening', '.remodal', function() {
            console.log('opening');
        });

        $(document).on('opened', '.remodal', function() {
            console.log('opened');
        });

        $(document).on('closing', '.remodal', function(e) {
            console.log('closing' + (e.reason ? ', reason: ' + e.reason : ''));
        });

        $(document).on('closed', '.remodal', function(e) {
            console.log('closed' + (e.reason ? ', reason: ' + e.reason : ''));
        });

        $(document).on('confirmation', '.remodal', function() {
            console.log('confirmation');
        });

        $(document).on('cancellation', '.remodal', function() {
            console.log('cancellation');
        });

        //  Usage:
        //  $(function() {
        //
        //    // In this case the initialization function returns the already created instance
        //    var inst = $('[data-remodal-id=modal]').remodal();
        //
        //    inst.open();
        //    inst.close();
        //    inst.getState();
        //    inst.destroy();
        //  });
    </script>

</body>

</html>