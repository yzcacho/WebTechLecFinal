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
                    <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4> </div>
                <form class="form-horizontal" action="../login.php?q=index.php" method="POST">
                    <div class="modal-body">
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
        <h2>Servlets-Overview</h2>
        <p>Servlet is a Java programming language class, part of Java Enterprise Edition (Java EE). Sun Microsystems developed its first version 1.0 in the year 1997. Its current Version is Servlet 3.1. Servlets are used for creating dynamic web applications in java by extending the capability of a server. It can run on any web server integrated with a Servlet container. In fact, servlets have access to the entire family of Java APIs, including the JDBC API to access enterprise databases. (Exelixis Media (P.C., 2015) </p>
        <p>Before Servlets, CGI (Common Gateway Interface) programming was used to create web applications. It is an interface that allows HTTP clients, such as Web browsers and other user agents, to pass information back to a server for processing (David Reily, Michael Reily,2012). They come up with certain disadvantages such as having a high response time because CGI programs execute in their own OS shell, not scalable not always secure or object-oriented. So, they need to find a solution. By this, Sun Microsystems developed Servlet which serves as their solution over traditional CGI technology.</p>
        <p>A servlet is an extension to a server that enhances the server's functionality. The most common use for a servlet is to extend a web server by providing dynamic web content. Web servers display documents written in HyperText Markup Language (HTML) and respond to user requests using the HyperText Transfer Protocol (HTTP). HTTP is the protocol for moving hypertext files across the internet. HTML documents contain text that has been marked up for interpretation by an HTML browser such as Netscape.</p>
        <p>Servlets are easy to write. All you need is Tomcat, which is the combined Java Server Pages 1.1 and Servlets 2.2 reference implementation. You can download a free copy of Tomcat. </p>
        <h2>Servlets Process</h2>
        <p>When client is requesting, the request is sent to a servlet container. Servlets are run inside the servlet container. No matter how many requests is send by the client. The time the request is arrived, the web server searches for the servlet and initiates it. The request of the client will be processed by the servlet and forwarded the response back to the server. Then the Server response is then forwarded to the client.</p>
        <p><img src="../images/servlets.png "></p>
        <p> Servlets advantages according to Exelixis Media (P.C., 2015): </p>
        <ul>
            <li>Servlets are platform independent as they can run on any platform.</li>
            <li>The Servlet API inherits all the features of the Java platform. It means that, Servlets have access to the entire family of Java APIs, including the JDBC API to access enterprise databases.</li>
            <li> It builds and modifies the security logic for server-side extensions. </li>
            <li>Servlets inherit the security provided by the Web Server. </li>
            <li>In Servlet, only a single instance of the requests runs concurrently. It does not run in a separate process. So, it saves the memory by removing the overhead of creating a new process for each request. </li>
            <li>It collects input from users through web page forms, present records from a database or another source, and create web pages dynamically. It means that Servlet container may run multiple and execute web applications at the same time, each having multiple servlets running inside. </li>
        </ul>
    </div>
    <div class="container ">
        <ul class="pager ">
            <li><a href="javaservelets.php">Next</a></li>
        </ul>
    </div>
</body>

</html>