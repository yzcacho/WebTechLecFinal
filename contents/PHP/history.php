<!DOCTYPE html>
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
        <button class="btn btn-secondary"><a href="history.php">History</a></button>
        <button class="btn btn-secondary"><a href="syntax.php">Syntax</a></button>
        <button class="btn btn-secondary"><a href="variables.php">Variable Types and Constants</a></button>
        <button class="btn btn-secondary"><a href="operator.php">Operator Types and Loop Types</a></button>
        <button class="btn btn-secondary"><a href="functions.php">Functions</a></button>
        <button class="btn btn-secondary"><a href="references.php">References</a></button>
    </div>
    <div id="content">
        <h2>What is PHP?</h2>
        <p>PHP is a scripting language on the server-side the is defined on a web server to be displayed to a web browser.</p>
        <h3>VERSIONS:</h3>
        <ul>
            <li>Version 1:</li>
            <p>Lerdorf re-programmed the Common Gateway Interface or CGI binaries in the C programming language. He expanded the scripts to have the functionality to work well with databases, thus PHP/FI is born. PHP/FI stands for "Personal Home Page/Forms Interpreter". It was released in 1994.</p>
            <li>Version 2:</li>
            <p>Lerdorf began to create a development team. He and his team improved PHP/FI 1 by including various Perl-like variables, and the ability to embed Hypertext Mark-up Language (HTML). PHP/FI 2 was released in November 1997.</p>
            <li>Version 3:</li>
            <p>Another two years have passed, two israeli developers namely, Andi Gutmans and Zeev Suraski, formed PHP 3 by rewriting the previous versions of PHP. They changed the name from PHP/FI to PHP: Hypertext Preprocessor. PHP 3 was released in June 1998.</p>
            <li>Version 4:</li>
            <p>Suraski and Gutmans started anew with PHP and created Zend Engine in 1999. Zend Technologies is thus born in Ramat Gan, Isarael. PHP 4 was then released the next year. PHP 4 ended with Version 4.4.9 and was no longer in development.</p>
            <li>Version 5:</li>
            <p>Powered by Zend Engine II, PHP 5 was released on July 13, 2004. This version included imporved with features like: supporting object-oriented programming. It became the only PHP version that was stable for further developments. </p>
            <li>Version 6: (Delayed)</li>
            <p>As PHP 5 is under development for imporvements, developers also planned to release a newer version called PHP 6. PHP 6 was supposed to have Unicode support. Thus, developers delayed the launch of PHP 6.</p>
        </ul>
    </div>
    <div class="container">
        <ul class="pager">
            <li><a href="syntax.php">Next</a></li>
        </ul>
    </div>
</body>

</html>