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
    <div class="nav-container"> </div>
    <div id="content">
        <h2>Introduction Server Side Web Scripting</h2>
        <p> Server-side scripting is a way for the web developers to design a website that can execute and process the users request on the originating server. It provides the user an interface that they can use and also helps to keep control of the script source code by limiting the users access.</p>
        <p>The server-side environment that runs a scripting language is a web server. A user's request is fulfilled by running a script directly on the web server to generate dynamic HTML pages. This HTML is then sent to the client browser. It is usually used to provide interactive web sites that interface to databases or other data stores on the server.(F1VW 34:Server Side Side Scripting for Web Applications (c) 2007 SQA)</p>
        <p>Web developers are commonly using server-side scripting to create a software that can connects the database to the browser that can give a user-friendly experience to the users. <img class="logo" src="../images/up.PNG" alt="up"></p>
        <h3>There are many server-side languages working toward that end goal. Some example of server-side scripting are the following: </h3>
        <ul>
            <li>Active Server Pages, later known as Classic ASP or ASP Classic, is developed by Microsoft's and this was the first server-side script engine for dynamically generated web pages. The first released of ASP.NET is January 2002 and replaced the ASP.</li>
            <li> C#: It’s excellent for developing Windows applications, and can be used to build iOS, Android mobile apps with the help of a cross-platform technology like Xamarin.</li>
            <li>JavaScript(Using Server-side JavaScript (SSJS) like node.js)</li>
            <li> PHP it is one of the most popular server-side language on the web, PHP is designed to pull and edit information in the database. It’s most commonly bundled with databases written in the SQL language. PHP was designed strictly for the web and remains one of the most widely used languages around and a foundation for a number of content-management systems. PHP-powered sites: WordPress, Wikipedia, Facebook</li>
            <li>Python: It’s the oldest of the scripting languages, is powerful, and works well in object-oriented designs. Python-powered sites: YouTube, Google, The Washington Post</li>
            <li>Java: “Compile once, run anywhere” is its motto—and it’s excellent for enterprise-level applications, high-traffic sites, and Android apps. Java sites: Twitter, Verizon, ATandT, Salesforce</li>
            <li>Ruby : Ruby-powered sites: Hulu, Twitter (originally), Living Social, Basecamp</li>
            <li>Erlang: A general-purpose programming language, Erlang is also a concurrent language, which means several processes can run simultaneously on the language-level without external library support. It’s used in the LYME and LYCE stacks, numerous CMS and databases, GitHub, Facebook chat, and Goldman Sachs, supporting its high-frequency trading requirements.(UPWORK CAREY WODEHOUSE). </li>
            <p></p>
        </ul>
    </div>
</body>

</html>