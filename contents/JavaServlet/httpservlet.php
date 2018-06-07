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
        <h2>HTTP Servlet</h2>
        <p> Java Servlet use to handle HTTP request and generate HTTP response. It is hosted in ‘web-container’ which is component in Java ‘application-server’. Application server like WildFly, GlassFish, Apache Tomcat, IBM WebSphere and more.
            <br> What happens on the Request handling on the third phase of the servlets life cycle. The service() method call is routed to a d0XXX() call, depending on the HTTP request method , e.g. doGet(), doPost(), doHead(), doPut(), doDelete(). </p>
        <table>
            <tr>
                <th> HTTP REQUEST METHOD </th>
                <th>Description</th>
            </tr>
            <tr>
                <td>doGet ()</td>
                <td>if the servlet supports HTTP GET requests</td>
            </tr>
            <tr>
                <td>doPost()</td>
                <td>for HTTP POST requests</td>
            </tr>
            <tr>
                <td>doPut()</td>
                <td>for HTTP PUT requests</td>
            </tr>
            <tr>
                <td>doDelete()</td>
                <td>for HTTP DELETE requests</td>
            </tr>
            <tr>
                <td>Init()and destroy() method</td>
                <td>to manage resources that are held for the life of the servlet</td>
            </tr>
            <tr>
                <td>getServletInfo()</td>
                <td>which the servlet uses to provide information about itself </td>
            </tr>
        </table>
        <p> The doXXX() methods passed two arguments: the object representation of the HTTP request sent by the client and received by servlet. It is use to accessed information from the request message (e.g. HTTP request, request URI, query string, message readers, message payload).</p>
    </div>
    <div class="button">
        <div class="container">
            <ul class="pager">
                <li><a href="environmentsetup.php">Previous</a></li>
                <li><a href="SessionHandling.php">Next</a></li>
            </ul>
        </div>
    </div>
</body>

</html>