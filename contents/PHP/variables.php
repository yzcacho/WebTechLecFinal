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
        <h2>PHP Variable Types</h2>
        <p>Variables in PHP are in Perl-like struecture which always start with the dollar sign ($). It can be declared even before assigning a value to it. Overall, PHP has eight variable types, namely:</p>
        <li>
            <h3>Integers</h3></li>
        <p>Integers are the simplest type of variable. They are whole numbers, both positive and negative. The way to declare an Interger variable is seen below:</p>
        <br/> <img src="../images/variable.PNG">
        <p>Integers may be in different formats (i.e. decimals, octals, hexadecimals).</p>
        <li>
            <h3>Doubles</h3></li>
        <p>Doubles print minmal number of decimal places by default.</p>
        <li>
            <h3>Boolean</h3></li>
        <p>Bolean has only two values to return, TRUE or FALSE.</p>
        <h3>Interpreting types of Boolean</h3>
        <p>Listed below are rules to determine the "truth" of boolean types:</p>
        <ul>
            <li>If the value is a number that is equivalent to zero, it is returned false. Otherwise, it will return true.</li>
            <li>Null values are alwys false.</li>
            <li>Never use double as Booleans</li>
        </ul>
        <li>
            <h3>Strings</h3></li>
        <p>Strings are seqquence of characters. They are delimited with double quotes. Strings are preprocessed two ways, characters beginning with a backslash are sustituted with special characters; and Variables that start with the dollar sign are substituted with string representation of their values.</p>
        <li>
            <h3>PHP Local Variables</h3></li>
        <p>PHP local variables are variables that aredeclared inside a function. </p>
        <br/> <img src="../images/variable1.PNG"> <img src="../images/variable2.PNG">
        <p>The following code will give this result:</p>
        <br/> <img src="../images/variable3.PNG">
        <li>
            <h3>PHP Global Variables</h3></li>
        <p>Global variables are variables that are accessed in any part of the code. However, this kind of variable can only be accessed by placing a keyword 'GLOBAL' before the variable itself. Consider the example below:</p>
        <br/> <img src="../images/variable4.PNG">
        <p>This code will then result to the answer: "Somevar is 16".</p>
        <li>
            <h2>PHP Static Variables</h2></li>
        <p>The last type of variable is Static Variables. Static Variables won't change even if the function exits and will still have the value if the function will be called again.</p>
        <h1>PHP Constants</h1>
        <p>PHP constants is simply the identifier of a certain value. By default, constant are case sensitive. It starts with either a letter or an underscore, followed by numbers, letters.</p>
        <p>To define a constant, you must use "define()" function. It doesn't require you to use the dollar sign unlike other variables.</p>
        <h3>PHP Magic Constants</h3>
        <p>PHP gives predefined constants to any script. Below is a list pf PHP constants.</p> <img src="../images/variable5.PNG"> </div>
    <div class="container">
        <ul class="pager">
            <li><a href="syntax.php">Previous</a></li>
            <li><a href="operator.php">Next</a></li>
        </ul>
    </div>
</body>

</html>