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
        <h2>Environment Setup and Java Servlet Example</h2>
        <p>NetBeans IDE is one of the tool commonly used by a developer that provides facilities to computer programmers for software development. So here, we will be demonstrating in setting up the your first servlet application.</p>
        <h3>Creating First Servlet Application using NetBeans IDE</h3>
        <ol>
            <li> We will setup the Servlet first in using Integrated Development Environment(IDE) on NetBeans. Developers take it as the easiest way to create Servlet Applications. So, the first step is, open the NetBeans IDE, under the nav bar select File and click the New Project to create a project.</li> <img src="../images/first.png" width="500px">
            <li> After that, you will navigate to a page wherein you will choose the category (e.g. Java, Java Web, Java EE, Maven, NetBeans Module, Samples). Click the Java Web. This will create an empty Web application in a standard IDE project. </li> <img src="../images/second.png" width="500px">
            <li>Set the project name. If you want to change the location of the file then edit on the Project Location. Then click Next.</li> <img src="../images/third.png" width="500px">
            <li> After that, you will be directed to the next step wherein you will specify the server that you will use, for this tutorial, we will use GlassFish Server. It is already built-in on the Java NetBeans IDE. But you can add a server like the most popular server, the Apache Tomcat, just click on the ‘Add’ button. Then click ‘Finish’.</li> <img src="../images/fourth.png" width="500px">
            <p>The context path will be added on the URL address if you want to view the file created on the web.
                <br> Example: </p> <img src="../images/fifth.png" width="500px">
            <li> After the project is created, the complete directory structure required for the Servlet Application will be created automatically by the IDE.</li> <img src="../images/six.png" width="500px">
            <p>As you can see on the figure, the WEB-INF folder contains the index.html file and the libraries like the JDK 1.8 and the server library is found and stored on the Libraries folder.</p>
            <li>. In creating a servlet, open Source Package, right click on default packages and then click New and finally click Servlet. Provide the name of your class, for this tutorial, I will have named it ‘MyFirstServlet’. Then click ‘Next’.</li> <img src="../images/seven.png" width="500px">
            <li> Next will be, tick the box indicating ‘Add information……’. This will add servlet information in web.xml file, it will auto generate the codes that are needed. Then click ‘Finish’.</li> <img src="../images/eight.png" width="500px">
            <li>After that, the servlet class is already been created.You can edit and add codes if you want.</li> <img src="../images/nine.png" width="500px">
            <li>When creating a HTML file, right click on the WEB-INF folder located at the left pane under the FirstServlet Project, click new and then HTML. After creating the HTML file. Put the name of the HTML file, it is recommended to name it index, because browser will always pick up the index.html file automatically from a directory. </li> <img src="../images/10.png" width="500px">
            <li> Next, edit web.xml file. In the web.xml file, add the following code highlighted. And the save it. Then, right click on your Project and select Run. </li> <img src="../images/11.png" width="500px">
            <li>Finally, you have been successfully created your first-class servlets.</li> <img src="../images/twelve.png" width="500px"> </ol>
    </div>
    <div class="container">
        <ul class="pager">
            <li><a href="lifecycle.php">Previous</a></li>
            <li><a href="httpservlet.php">Next</a></li>
        </ul>
    </div>
</body>
</html>