<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>COURSE WEBSITE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/font.css">
    <script src="../js/jquery.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
        <style>
            #grow {
                transition: all .2s ease-in-out;
            }
            
            #grow:hover {
                transform: scale(1.3);
            }
        </style>
</head>

<body>
    <div class="row header">
        <div class="col-lg-6"> <span class="logo"><img src="../image/ourlogo.png" style="padding-top:5px;"width="300"></span></div>
        <div class="col-md-2"> </div>
        <div class="col-md-4">
            <?php
 include_once '../dbConnection.php';
session_start();
  if((!isset($_SESSION['email']))){
echo '<a href="#" class="pull-right sub1 btn title3" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Signin</a>&nbsp;';}
else
{
echo '<a href="logout.php?q=feedback.php" class="pull-right sub1 btn title3"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</a>&nbsp;';}
?> <a href="../index.php" class="pull-right btn sub1 title3"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>&nbsp;Back</a>&nbsp; </div>
    </div>
    <!--sign in modal start-->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content title1">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4> </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="../login.php?q=index.php" method="POST">
                        <fieldset>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email"></label>
                                <div class="col-md-6">
                                    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email"> </div>
                            </div>
                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="password"></label>
                                <div class="col-md-6">
                                    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password"> </div>
                            </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Log in</button>
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h3>Topics</h3>
        <hr>
        <div class="row">
            <aside class="col-sm-4" id="grow">
                <div class="iconbox h-100">
                    <a href="./ServerSideWebScipting/introSSWS.php">
                        <div class="icon-wrap align-self-center"><img src="images/servlet.png" width="200"></div>
                        <div class="text-wrap">
                            <h3>Java servlets</h3>
                            <p> We will setup the Servlet first in using Integrated Development...</p> <a href="./JavaServlet/servlets.php" class="btn sub1"><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;<span class="title1"><b>More</b></span></a> </div>
                </div>
            </aside>
            <aside class="col-sm-4">
                <div class="iconbox h-100" id="grow">
                    <a href="./NodeJs/node%20js.php">
                        <div class="icon-wrap align-self-center"><img src="images/nodejs.png" width="200"></div>
                        <div class="text-wrap">
                            <h3>Node.js</h3>
                            <p>Node.js® is a JavaScript runtime built on Chrome's V8 JavaScript engine...</p> <a href="./NodeJs/node%20js.php" class="btn sub1"><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;<span class="title1"><b>More</b></span></a> </div>
                </div>
            </aside>
            <aside class="col-sm-4" id="grow">
                <div class="iconbox h-100">
                    <a href="./PHP/history.php">
                        <div class="icon-wrap align-self-center"><img src="images/php.png" width="200"></div>
                        <div class="text-wrap">
                            <h3>PHP</h3>
                            <p>The PHP development team announces the immediate availability of ...</p> <a href="./PHP/history.php" class="btn sub1"><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;<span class="title1"><b>More</b></span></a> </div>
                </div>
            </aside>
            <aside class="col-sm-6" id="grow">
                <div class="iconbox h-100">
                    <a href="./ServerSideWebScipting/introSSWS.php">
                        <div class="icon-wrap align-self-center"><img src="images/server.png" width="200"></div>
                        <div class="text-wrap">
                            <h3>Serverside scripting</h3>
                            <p> Server-side scripting is a technique used in web development which involves employing scripts...</p> <a href="./ServerSideWebScipting/introSSWS.php" class="btn sub1"><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;<span class="title1"><b>More</b></span></a> </div>
                </div>
            </aside>
            <aside class="col-sm-6" id="grow">
                <div class="iconbox h-100">
                    <a href="./WebApp/intro.php">
                        <div class="icon-wrap align-self-center"><img src="images/webapp.png" width="200"></div>
                        <div class="text-wrap">
                            <h3>Web application</h3>
                            <p>In computing, a web application or web app is a client–server computer program which the client... </p> <a href="./WebApp/intro.php" class="btn sub1"><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;<span class="title1"><b>More</b></span></a> </div>
                </div>
            </aside>
        </div>
        <!--row.//-->
    </div>
    <footer class="footer">
        <p>Baguio City, Philippines 2600, (+63)977-826-4922 © Webtechnology Copyright 2018</p>
    </footer>
</body>