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
        <h2>Session Cookies</h2>
        <h3>Cookies</h3>
        <p>It is also used in session management. It is stored in the users browser and sends back to the server if needed. It is a small piece of information that has a name, a single value and some attributes. Its life span depends on how long the users browser is running and by the time the users browser is closed all cookies will be destroyed. And when the user open the browser againit sends request to the server, and a new session is being created.
            <h3>There are two Types of Cookies</h3>
            <ol>
                <li>Session Cookies</li>
                <p>It lives in the user browsers memory and when the user browser is closed the cookies gets destroyed. </p>
                <h4>Persistent Cookies</h4>
                <li>Persistent Cookies</li>
                <p>It is destroyed based on its expiration date and it was stored in the users hard drive.</p>
                <h3>Sending Cookies to client</h3> </ol>
            <h3>Sending a Cookie</h3>
            <ol>
                <li>Create a Cookie object</li> <img src="../images/c.png">
                <br>
                <li>Set the maximum Age</li> <img src="../images/cc.png">
                <br>
                <li>Place the Cookie in HTTP response header</li> <img src="../images/ccc.png"> </ol>
            <p> Disadvantage of using a cookies in session handling. Using cookies in session tracking is a bad practice because of the following:</p>
            <ol>
                <li>It will not availablle if ever the clients browser was cleared or disabled yhe cookies.</li>
                <li>It is more difficult to implement cookies for session tracking than other session management mechanism.</li>
                <li>It only wooks for HTTP protocol.</li>
            </ol>
            <h3>Methods of Cookie class</h3>
            <ol>
                <li>public void setComment(String purpose):
                    <p>This methods allows you to setup a comment in the cookies and describe the purpose of the cookie.</p>
                    <li> public String getComment():</li>
                    <p>Returns the comment you've placed in the setComment() method.</p>
                    <li>public void setMaxAge(int expiry):</li>
                    <p>Sets the cookies maximum age in seconds.</p>
                    <li>public int getMaxAge():</li>
                    <p>Gets the Cookies maximum age in seconds, By default, -1 is returned, which indicates that the cookie will persist until browser shutdown.</p>
                    <li> public String getName():</li>
                    <p>Returns the name of the cookie. The name cannot be changed after creation.</p>
                    <li>public void setValue(String newValue):</li>
                    <p> Assigning new value to the Cookie.</p>
                    <li>public String getValue():</li>
                    <p>Gets the current value of the Cookie.</p>
            </ol>
    </div>
    <div class="container">
        <ul class="pager">
            <li><a href="SessionHandling.php">Previous</a></li>
            <li><a href="ServletExample.php">Next</a></li>
        </ul>
    </div>
</body>

</html>