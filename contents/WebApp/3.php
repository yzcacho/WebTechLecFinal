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
        <h3><u>Sensitive Data Exposure</u></h3>
        <p>Sensitive data exposure is a vulnerability that occurs whenever a web application does not properly protect sensitive information from being revealed to illegitimate users. In web applications created today, almost all contains sensitive data that requires stronger security, some examples are passwords, credit card information and personal information that pertains to a person and their property. When sensitive data exposure happens, attackers can easily exploit data such as passwords, bank account numbers to conduct cyber crimes. </p>
        <p> Sensitive data exposure is uncommonly used for it is difficult to do as well as hard to detect, though giving off a significantly severe effect if executed by the attacker properly. An attacker works by detecting if a network accessed by a user through http has no encryption or security. The attacker can get into the network and perform a sniffing activity into the networks traffic, this attacker approach is also called as MITM - Man in the middle attack, through this, easily the attacker can access any data being sent through the network including the user’s credentials and any personal information available in the network.</p>
        <h3>Ways to Mitigate</h3>
        <ol>
            <li>Encrypt the data being sent over the network and define the user accessibilities. Data without encryption gives attackers more opportunity. Determine sensitive data that should have more protection and define the user accessibility by using private keys for encryption.</li>
            <li>Create secure passwords, that satisfies the requirements for the networks and applying algorithms such as hash algorithm created for passwords. and making sure to update the password every month. </li>
            <li>Using the standard security technology such as SSL or TSL so interactions from the user, network and the web server remains confidential for this technologies apply encryption that makes sure of the privacy using http connection. </li>
            <li>Periodically monitoring the security system updating the system for new and advanced technologies and changes in business process should be applied to identify new risks and potential threats.</li>
        </ol>
        <h3>Example Scenario</h3>
        <p>An attacker or a man in the middle can simply access a website that does not make use of TSL or SSL. They can monitor the network traffic openly in a wireless network and have the opportunity easily access and take the user’s session cookie that is currently accessing the contents of the web application unknowingly. After taking the user’s session cookie, the attacker can exploit this information and make use of this to take over the user’s current session and access his or her’s private data. </p>
        <br>
        <br>
<iframe width="854" height="480" src="https://www.youtube.com/embed/ZSmOsnOFWT0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
         </div>
    <div class="container">
        <ul class="pager">
            <li><a href="2.php">Previous</a></li>
            <li><a href="4.php">Next</a></li>
        </ul>
    </div>
</body>

</html>