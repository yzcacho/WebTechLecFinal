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
                <div class="modal-body">
                    <form class="form-horizontal" action="../../login.php?q=index.php" method="POST">
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
    <div class="nav-container">
        <div class="nav-bar"><a href="intro.php">Web Application Security Risk</a></div>
        <div class="nav-bar"> <a href="1.php">Injection</a> </div>
        <div class="nav-bar"><a href="2.php">Broken Authentication</a></div>
        <div class="nav-bar"><a href="3.php">Sensitive Data Exposure</a></div>
        <div class="nav-bar"><a href="4.php">XML External Entities (XXE)</a></div>
        <div class="nav-bar"><a href="5.php">Broken Access Control</a></div>
        <div class="nav-bar"><a href="6.php">Security Misconfiguration</a> </div>
        <div class="nav-bar"><a href="7.php">Cross-Site Scripting (XSS)</a> </div>
        <div class="nav-bar"><a href="8.php">Insecure Deserialization</a> </div>
        <div class="nav-bar"><a href="9.php">Using Components with Known Vulnerabilities</a> </div>
        <div class="nav-bar"><a href="10.php">Insufficient Logging and Monitoring</a> </div>
        <div class="nav-bar"> <a href="references.php">References</a> </div>
    </div>
    <div id="content">
        <h3><u>Broken Authentication</u></h3>
        <p>We need to have authentication to keep our privacy intact. Security plays a major role, especially nowadays. Broken Authentication is a type of vulnerability that gives attackers a way for them to bypass any unauthorized access of, for example, an account. Applications usually require a user to login into their own accounts. Non-technical people would think that they are safe from “attacks”. .</p>
        <h3> Minimizing the risk/ best practices/ remedy
</h3>
        <ol>
            <li> Generated Session ID’s must have a unique and random value </li>
            <li> Encryption of sensitive data and securing connections to block any interception between the user and the application</li>
            <li> Users must provide passwords that contain alphanumeric characters to prevent attackers from easily obtaining the users password</li>
            <li> When a user has logged out of his/her account the web application must invalidate the session id so that the attacker that has the session id cannot use it </li>
            <li> Session ID’s should not be visible inside the URL of the browser </li>
        </ol>
        <h3>Example</h3>
        <ol>
            <li>A student went to a computer shop and visited every single social media site he has. He was having a great time until he realizes that it was 5 minutes before his next class starts. Scared of having his class card dropped, he closed his browser without logging out his social media accounts. An hour later, another person rented the same PC, opened the browser and had seen the social media accounts of the student. Hopefully that this random person is good to logout all of the accounts.</li>
            <li>An example scenario of this is when a website’s URL contains the session ID (http://www.sample.com/accounts?admin=0). A website URL is visible to anyone, thus this imposes a vulnerability because anyone can manipulate the URL and use it to access different IDs. </li>
        </ol>

        <iframe width="854" height="480" src="https://www.youtube.com/embed/5ZLmRMLo6HI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <div class="container">
        <ul class="pager">
            <li><a href="1.php">Previous</a></li>
            <li><a href="3.php">Next</a></li>
        </ul>
    </div>
</body>

</html>