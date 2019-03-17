<!DOCTYPE html>

<html>
    <head>
        <title>AG Consult</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="css/ag_consult_style.css" rel="stylesheet">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="ag-contact">
        <header>
            <section id="ag-masthead" class="row"> 
                <div class="col-sm-3" id="ag-logo">
                    <img class="img-responsive " src="./images/home/logo.png" alt="ag-consult logo"  >
                </div><!-- aglogo -->
                <div class="col-sm-6"> <!-- site title -->
                    <p id="ag-title"><span id="ag-header">AG Consult</span><br>
                        <span id="ag-subheader">Consulting Hydrologists & Engineers</span></p>
                </div><!-- /site title -->
                <div class="col-sm-3">
                    <!-- place holder -->
                </div>
            </section><!-- /masthead -->
            <nav id="ag-main-nav" class="navbar navbar-default navbar-fixed-top">

                <a class="navbar-brand show-grid hidden-sm hidden-md hidden-lg" href="#">AG Consult</a>
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div id="navbar" class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="../index.html">HOME</a></li>
                        <li><a href="../pages/company.html" >COMPANY</a></li>
                        <li><a href="../pages/projects.html" >PROJECTS</a></li>
                        <li class="active"><a href="contact.php" >CONTACT</a></li> 
                    </ul>
                    <div id="ag-sm" class="pull-right">
                        <a href="https://www.facebook.com/AGConsult.Consulting?ref=hl" target="_blank"><img id="agfacebook" src="./images/home/facebook_logo.png" alt="facebook logo"></a>
                        <a href="https://twitter.com/AGConsult1" target="_blank"><img id="agtwitter" src="./images/home/twitter_logo.png" alt="twitter logo"></a>

                    </div>
                </div><!--/.nav-collapse -->

            </nav>
        </header>



        <div class="container-fluid ">

            <div class="main_content">
                <section class="row ">
                    <div class="col-md-1"></div>
                    <article class="col-md-5">
                        <div id="submit_success" class="has-success help-block">
                            <h2>Thank you for your message, We will get back to you as soon as possible. </h2></div>
                        <form id="ag_contact_form" method="post" action="mail/mailer.php" class="form-horizontal top-padding" role="form">
                            <legend>Contact Us</legend>

                            <div class="form-group">
                                <label for="firstname" class="">First Name</label>
                                <div class="">
                                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Your first name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="secondname" class="">Second Name</label>
                                <div class="">
                                    <input type="text" class="form-control" name="secondname" id="secondname" placeholder="Your second name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="">E-Mail</label>
                                <div class="">
                                    <!--insert required attribute after testing jquery validation -->
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Your Email address">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subject" class="">Subject</label>
                                <div class="">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Your subject">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="message" class="">Your Message</label>
                                <div class="">

                                    <textarea class="form-control" name="message" id="message" rows="10" ></textarea>   
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="">
                                    <button type="submit" class="btn btn-warning" name="submit" id="user_submit">Submit</button>
                                </div>
                            </div>
                        </form>
                        <div id="submit_error" class="has-error help-block"></div>
                    </article>
                    <article class="col-md-1"></article>
                    <article class="col-md-5">

                        <div class="top-padding">
                            <table id="address" class="table table-responsive table-condensed">
                                <tbody>
                                <thead><td colspan="2"><h4>Our Address</h4></td></thead>
                                <tbody>
                                    <tr><td colspan="2">Cameron Street</td></tr>
                                    <tr><td colspan="2">Bole Medhanialem Av</td></tr>
                                    <tr><td colspan="2">Beza Building 5th & 6th Floor</td></tr>
                                    <tr><td colspan="2">P.O.Box : 4661</td></tr>
                                 
                                </tbody>
                                <tfoot>
                                    <tr><td rowspan="2">Telephone</td><td>+ 251 (116) 18 15 19</td></tr>
                                    <tr><td>+ 251 (116) 18 15 20</td></tr>
                                </tfoot>
                            </table>
                            <!-- Button to trigger modal -->
                            <p><a href="#mapmodals" 
                                  data-toggle="modal" 
                                  role="button">
                                    <img src="./images/contact/map_btn.png" 
                                         alt="ag consult office location" 
                                         title="click to open Map">
                                </a>
                            </p>  
                            <p>Our location - click to enlarge</p>
                            <!-- Modal -->
                            <div class="modal fade" id="mapmodals">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">AG CONSULT office - Addis Ababa</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div id="map-container">
                                                
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="close" data-dismiss="modal">Close</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <div>
                                <img id="ag_office" class="img-responsive img-rounded" src="./images/company/ag_consult_office.jpg">
                                <p>Our office in Addis Ababa</p>

                            </div>

                        </div>
                    </article>
                </section>

            </div><!-- main_content-->


           <footer>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 center-block" id="footer_menu">
                    <ul class="nav">
                        <li class="active"><a href="index.html">HOME</a></li>
                        <li><a href="pages/company.html" >COMPANY</a></li>
                        <li><a href="pages/projects.html" >PROJECTS</a></li>
                        <li><a href="mail/contact.php" >CONTACT</a></li> 
                    </ul>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p><span class="copy-right">&COPY;</span>AG Consult 2014</p>
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-3">
                    <p>Web Design:Meda IT <a id="medait" href="http://www.medaits.com">
                            <img src="./images/home/medait-logo.png" alt="meda-it logo"></a></p>
                </div>
            </div>
        </footer>


            <script src="js/ag_consult_script.js"></script>
            <script src="http://maps.google.com/maps/api/js?sensor=false"></script>


        </div> <!-- /container-fluid -->
    </body>

</html>

