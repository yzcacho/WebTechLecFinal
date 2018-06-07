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
        <h2>JAVA SERVLETS</h2>
        <p>Java Servlets are server-side programming applications that execute similar to CGI scripts,but without a separate process for each request(David Reily, Michael Reily,2012).It is described as a java object that are intended to play the role server components in client-server communications and a java class extending HTTPServlet class. It handles client requests by generating responses to such requests. A java servlets class needs to be compiled prior to using it; it must use servley-api.jar. Java Servlets are part of the Java Enterprise Edition (Java EE). It is run inside a Servlet compatible "Servlet Container" (e.g. web server) in order for them to work such as Jelly, Apache Tomcat that are free Java web servers. </p>
        <p>Servlets is hosted in a ‘servlet container’ that provides the environment in which the server run as the ‘servlet life cycle’.</p>
        <center><img src="../images/cycle.png" width="500px"> </center>
        <p> Servlet Container is known as servlet engine which manages Java Servlet components on top of a web server to the request send by the client. </p>
    </div>
    <div class="container">
        <ul class="pager">
            <li><a href="servlets.php">Previous</a></li>
            <li><a href="lifecycle.php">Next</a></li>
        </ul>
    </div>
</body>

</html>