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
        <h2>PHP Syntax Overview</h2>
        <h3>Escaping PHP</h3>
        <li>Canonical PHP Tags</li>
        <br/> <img src="../images/syntax.PNG">
        <p>The photo above shows the universally PHP tag that is usually used.</p>
        <li>Short-open tags (SGML-style)</li>
        <br/> <img src="../images/syntax1.PNG">
        <p>For PHP to be familiar with the tags you use, you must either use two of the following: (a) Look for --enable-short-tags configuration when building PHP or (b) Go to your php.inl file and turn on the short_open_tag</p>
        <li>ASP-style tags</li>
        <br/> <img src="../images/syntax2.PNG">
        <p>ASP tags are used to delineate code blocks. Set the configuration of the ASP tags when you open php.inl </p>
        <li>HTML script tags</li>
        <br/> <img src="../images/syntax3.PNG">
        <h2>Commenting PHP Code</h2>
        <li>Single-line comments</li>
        <p>Single-line comments are used if you are explaning your script i=on a sngle line. Sysmbols used to define a single-line commen are: (a) # and (b) //.</p>
        <li>Multi-line printing</li>
        <p>Muti-lines printing are comments that prints lines in a single print statement</p>
        <li>Multi-line comments</li>
        <p>These are comments that more dtailed explanations about yor script. Multi-line comment in PHP is similar to when you program in C language.</p>
        <h2>WHITESPACE insensitive</h2>
        <p>PHP whitespace almost never matters to how many whitespaces character you have in a row.</p>
    </div>
    <div class="container">
        <ul class="pager">
            <li><a href="history.php">Previous</a></li>
            <li><a href="variables.php">Next</a></li>
        </ul>
    </div>
</body>

</html>