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
        <h2>Servlets example</h2>
        <p>Servlet Backend The example below named ExampServlet.java builds an HTML page to return to the end user. This means the servlet code does not use any Project Swing or Abstract Window Toolkit (AWT) components or have event handling code. For this simple servlet, you only need to import these packages:
            <ul>
                <li>java.io for system input and output. The HttpServlet class uses the IOException class in this package to signal that an input or output exception of some kind has occurred.</li>
                <li> javax.servlet, which contains generic (protocol-independent) servlet classes. TheHttpServlet class uses the ServletException class in this package to indicate a servlet problem. </li>
                <li>javax.servlet.http, which contains HTTP servlet classes. The HttpServlet class is in this package.</li>
            </ul>
            <p>See the example below:</p> <img src="../images/sample.jpg"> 
    
        <h2>Class and Method Declarations</h2>
        <p> All servlet classes extend the HttpServlet abstract class. HttpServlet simplifies writing HTTP servlets by providing a framework for handling the HTTP protocol. Because HttpServlet isabstract, your servlet class must extend it and override at least one of its methods. An abstractclass is a class that contains unimplemented methods and cannot be instantiated itself.
            <br> public class ExampServlet extends HttpServlet {
            <br> public void doPost(HttpServletRequest request,
            <br> HttpServletResponse response)
            <br> throws ServletException, IOException
            <br> { </p>
        <p>The <i>ExampServlet class</i> is declared public so the web server that runs the servlet, which is not local to the servlet, can access it. The ExampServlet class defines a doPost method with the same name, return type, and parameter list as the doPost method in the HttpServlet class. By doing this, the ExampServletclass overrides and implements the doPost method in the HttpServlet class.</p> The <i>doPost method </i>dperforms the HTTP POST operation, which is the type of operation specified in the HTML form used for this example. The other possibility is the HTTP GET operation, in which case you would implement the doGet method instead.
        <p>In short, POST requests are for sending any amount of data directly over the connection without changing the URL, and GET requests are for getting limited amounts of information appended to the URL. POST requests cannot be bookmarked or emailed and do not change the Uniform Resource Locators (URL) of the response. GET requests can be bookmarked and emailed and add information to the URL of the response. The parameter list for the doPost method takes a request and a response object. The browser sends a request to the servlet and the servlet sends a response back to the browser. The doPost method implementation accesses information in the request object to find out who made the request, what form the request data is in, and which HTTP headers were sent, and uses the response object to create an HTML page in response to the browser's request. doPostIOExceptionServletExceptionHttpServlet</p>
        </div>
    <div class="container ">
        <ul class="pager ">
            <li><a href="references.php">Next</a></li>
        </ul>
    </div>
</body>

</html>