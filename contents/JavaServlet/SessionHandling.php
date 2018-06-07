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
        <h2>Session Handling</h2>
        <p>A <em>session</em> can be defined as the communication between two people. In web application session is the communication between the users and the servers in the form of the request and respond. It is a sequence of network HTTP request transaction associated with one user.</p>
        <p>Sessions is a way of storing data for individual users contrary to a unique session ID. You can also invalidate the session by calling the session.invalidate() method.Many of us now uses internet and visits websites. According to <b>Internet World Stats</b> over <b>7,634,758,428</b> population of the world <b>4,156,932,140</b> uses internet as of <em>December 2017</em> and it is possible that there will be a traffic in accessing the site if many users will access one website at the same time. And to handle that situation <em>Web Servers</em> uses <b>Session Handling</b> to handle every request of the users.</p>
        <h3>HTTP Session</h3>
        <p> are used for managing sessions. Sessions was determined by a specific and unique ID stored in a cookies given by the server to a specific user. When a new user visits a site he/she was given an ID to determine his/her unique session it was obtained via <b>request.getSession()</b> method. A HTTPSession works out until it reach its timeout. </p> This is how to create a HTTPSession object.(See the figure below)
        <br>
        <p> <img src="../images/sh.PNG"></p>
        <br>
        <br>
        <h3>Methods of HttpSession</h3>
        <ul>
            <li>public void setAttribute(String name, Object value): can be used in storing user information into the session objects and can also used in fetching information into a session. </li>
            <li>public Object getAttribute(String name):Returns null if no object was found in the specific attribute. String object specified in the parameter, from the session object</li>
            <li>public Enumeration getAttributeNames(): Returns an Enumeration that contains the name of all the objects that are bound as attributes to the session object.</li>
            <li>public void removeAttribute(String name): Given attribute from session can be removed. </li>
            <li>setMaxInactiveInterval(int interval): Sets the time of activeness of the session after the last request received from the client. </li>
        </ul>
        <h3>Session ID</h3>
        <ul>
            <li>Embedded</li>
            <li>Hidden from fields</li>
            <li>Cookie Based</li>
        </ul>
        <div class=" container ">
            <ul class="pager ">
                <li><a href="httpservlet.php">Previous</a></li>
                <li><a href="SessionHandling2.php">Next</a></li>
            </ul>
        </div>
    </div>
</body>

</html>