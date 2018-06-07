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
        <div class="nav-bar"><a href="../WebApp/1.php">Injection</a> </div>
        <div class="nav-bar"><a href="../WebApp/2.php">Broken Authentication</a></div>
        <div class="nav-bar"><a href="../WebApp/3.php">Sensitive Data Exposure</a></div>
        <div class="nav-bar"><a href="../WebApp/4.php">XML External Entities (XXE)</a></div>
        <div class="nav-bar"><a href="../WebApp/5.php">Broken Access Control</a></div>
        <div class="nav-bar"><a href="../WebApp/6.php">Security Misconfiguration</a> </div>
        <div class="nav-bar"><a href="../WebApp/7.php">Cross-Site Scripting (XSS)</a> </div>
        <div class="nav-bar"><a href="../WebApp/8.php">Insecure Deserialization</a> </div>
        <div class="nav-bar"><a href="../WebApp/9.php">Using Components with Known Vulnerabilities</a> </div>
        <div class="nav-bar"><a href="../WebApp/10.php">Insufficient Logging and Monitoring</a> </div>
        <div class="nav-bar"><a href="../WebApp/references.php">References</a> </div>
    </div>
    <div id="content">
        <h3><ul>Injection</ul></h3>
        <p>Injection flaws, such as SQL, NoSQL, OS, and LDAP injection, occur when untrusted data is sent to an interpreter as part of a command or query. The attacker's hostile data can trick the interpreter into executing unintended commands or accessing data without proper authorization.<i>(OWSP documentation)</i></p>
        <p>Injection is a method that exploits risks or vulnerabilities where the attack is sent using command based execution. It may come from an unknown source that is not reliable or from the client himself through accessing some applications. Injection means that the malicious data is being installed to the client’s device. This is possible by executing command-based applications like SQL queries and OS commands or Command Line.</p>
        <h3>Ways to mitigate </h3>
        <ol>
            <li>Source code review and automated testing are the most advised methods to prevent this kind of attack or threat.</li>
            <li>Sources of Information or Data retrieved from unreliable sources should be checked by a application before running the command</li>
            <li>Install an application that checks the source code for malicious content before executing the code.</li>
            <li>Avoid relying on unknown or unreliable sources.</li>
            <li>Always use the preferred API for the application. </li>
            <h3>Example Scenario </h3>
            <p>Some applications blindly trust other frameworks which makes the SQL calls vulnerable.Below is an example of an SQL injection:</p>
            <h4>Browser URL:</h4>
            <p></p> http://www.sample.com/accounts?Id=1
            <h4>	SQL Call: </h4>
            <p>SELECT * FROM accounts WHERE ID = 1; </p>
            <h4>Threat:</h4>
            <p>The threat agent will change the SQL condition from ‘ID = 1’ to ‘1=1’.</p>
            <h4>New Browser URL:</h4>
            <p>http://www.sample.com/accounts?1=1</p>
            <h4>Untrusted SQL Call:</h4>
            <p>SELECT * FROM accounts WHERE 1 = 1;</p>
            <h4>Implication:</h4>
            <p>If the condition becomes true, then all accounts in the database will be compromised</p>
            <br>
            <br> </ol>

            <iframe width="854" height="480" src="https://www.youtube.com/embed/Znywg57m2iM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
</body>

</html>