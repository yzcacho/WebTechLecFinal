<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>COURSE WEBSITE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/font.css">
    <script src="../../js/jquery.js" type="text/javascript"></script>
    <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../../css/contents.css">
    <?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
</head>

<body>
    <div class="row header">
        <div class="col-lg-6"> <span class="logo"><img src="../../image/ourlogo.png" style="padding-top:5px;"width="300"></span></div>
        <div class="col-md-2"> </div>
        <div class="col-md-4">
            <?php
 include_once '../../dbConnection.php';
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
                    <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4> 
                </div>
                <form class="form-horizontal" action="../login.php?q=index.php" method="POST">
                <div class="modal-body">
                    
                        <fieldset>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email"></label>
                                <div class="col-md-6">
                                    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email"> 
                                </div>
                            </div>
                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="password"></label>
                                <div class="col-md-6">
                                    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password"> 
                                </div>
                            </div>
                        </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Log in</button>
                </div>
              </form>
            </div>
        </div>
    </div>
   <div class="nav-container">
        <button class="btn btn-secondary"><a href="servlets.php">Servlets - Overview</a></button>
        <button class="btn btn-secondary"><a href="javaservelets.php">Java Servlets</a></button>
        <button class="btn btn-secondary"><a href="lifecycle.php">Servlet Life Cycle</a></button>
        <button class="btn btn-secondary"><a href="environmentsetup.php">Environment Setup</a></button>
        <button class="btn btn-secondary"><a href="httpservlet.php">HTTP Servlet</a></button>
        <button class="btn btn-secondary"><a href="interfaceservlet.php">Servlet Interfaces</a></button>
        <button class="btn btn-secondary"><a href="SessionHandling.php">Session Handling</a></button>
        <button class="btn btn-secondary"><a href="ServletExample.php">Example</a></button>
        <button class="btn btn-secondary"><a href="references.php">References</a></button>
    </div>
    <div id="content">
        <h2>Servlet Life Cycle</h2>
        <p>Servlet lifecycle describes how the servlet container manages the servlet object.</p>
        <center><img src="../images/cycle2.png" width="500px" height="400px"> </center>
        <p>When a client sends a request to a servlet-enabled server that invokes a server first checks to see of the servlet is loaded. If it is not, the servlet class is loaded and a new instance is created. And the cycle will start with the: </p>
        <h5>First phase: Instantiation</h5>
        <ul>
            <li> ‘constructor all…’</li>
            <li>Creates an instance of the servlet to service client request</li>
            <li>Invoked implicitly by the servlet container when the servlet is called then it creates instance to create servlet.</li>
        </ul>
        <h5>
Second phase: Initialization</h5>
        <ul>
            <li>‘init() method’ : This is called only once when the servlet is created. </li>
            <li>Invoked once and is intended for any startup initialization code for the servlet</li>
        </ul> <img src="../images/2phase.png" width="700px">
        <h5>Third phase: Request Handling
</h5>
        <ul>
            <li>‘service method’: It is called by the web container to handle request from client</li>
            <li>Invoked repeatedly for every client request</li>
            <li>Servlet performs whatever logic necessary in order to serve the request and response.</li>
            <li>Multi-client request typically handled by single multi-threaded</li>
            <li>Must have ‘thread safe’</li>
        </ul>
        <h5>Fourth phase: Destruction</h5>
        <ul>
            <li>‘destroy method’: It is used to clean resources and called before removing the servlet instance.</li>
            <li> Invoked before the servlet instance is ‘unloaded’ and is intended for ‘housekeeping’.</li>
        </ul> <img src="../images/4cycle.png" width="700px"> </div>
</body>
<div class="container">
    <ul class="pager">
        <li><a href="javaservelets.php">Previous</a></li>
        <li><a href="environmentsetup.php">Next</a></li>
    </ul>
</div>>

</html>