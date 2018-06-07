<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>COURSE WEBSITE</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <?php if (@$_GET['w']) {
        echo '<script>alert("' . @$_GET['w'] . '");</script>';
    }
    ?>
        <script>
            function validateForm() {
                var y = document.forms["form"]["name"].value;
                var letters = /^[A-Za-z]+$/;
                if (y == null || y == "") {
                    alert("Name must be filled out.");
                    return false;
                }
                var z = document.forms["form"]["college"].value;
                if (z == null || z == "") {
                    alert("college/university must be filled out.");
                    return false;
                }
                var x = document.forms["form"]["email"].value;
                var atpos = x.indexOf("@");
                var dotpos = x.lastIndexOf(".");
                if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                    alert("Not a valid e-mail address.");
                    return false;
                }
                var a = document.forms["form"]["password"].value;
                if (a == null || a == "") {
                    alert("Password must be filled out");
                    return false;
                }
                if (a.length < 5 || a.length > 25) {
                    alert("Passwords must be 5 to 25 characters long.");
                    return false;
                }
                var b = document.forms["form"]["cpassword"].value;
                if (a != b) {
                    alert("Passwords must match.");
                    return false;
                }
            }
        </script>
</head>

<body>
    <div class="header">
        <div class="row" style="padding-right: 25px;"> <a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span
                    class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span
                    class="title1"><b>Signin</b></span></a> <a href="./contents/index.php" class="pull-right btn sub1"><span class="glyphicon glyphicon-book"></span>&nbsp;<span class="title1"><b>Notes</b></span></a>
            <div class="col-lg-6"> <span class="logo"><img src="image/ourlogo.png" width="300"></span></div>
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content title1">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4> </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="email"></label>
                                        <div class="col-md-6">
                                            <input id="email" name="email" placeholder="Enter your email" class="form-control input-md" type="email"> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="password"></label>
                                        <div class="col-md-6">
                                            <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password"> </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Log in</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel-default">
        <div id="carousel-default" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-default" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-default" data-slide-to="1" class=""></li>
                <li data-target="#carousel-default" data-slide-to="2" class=""></li>
                <li data-target="#carousel-default" data-slide-to="3" class=""></li>
                <li data-target="#carousel-default" data-slide-to="4" class=""></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active"> <img src="./image/001.jpg" alt="First slide"> </div>
                <div class="item"> <img src="./image/002.jpg" alt="Second slide"> </div>
                <div class="item"> <img src="./image/003.jpg" alt="Third slide"> </div>
                <div class="item"> <img src="./image/004.jpg" alt="Third slide"> </div>
                <div class="item"> <img src="./image/005.jpg" alt="Third slide"> </div>
            </div>
            <a class="left carousel-control" href="#carousel-default" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
            <a class="right carousel-control" href="#carousel-default" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
        </div>
    </div>
    <div style="background-color:##AFEEEE; height: 100px;" class="row footer p-2 ">
        <div class="row ">
            <h1></h1> </div>
        <div class="row footer p-2 ">
            <div class="col-md-3 "> </div>
            <div class="col-md-3 "> </div>
            <div class="col-md-3 "> </div>
            <div class="col-md-3 "> </div>
        </div>
    </div>
    <div class="row footer p-2 ">
        <div class="row ">
            <h1>Tutorial Videos</h1> </div>
        <div class="row footer p-2 ">
            <div class="col-md-3 ">
                <iframe width="420 " height="315 " src="https://www.youtube.com/embed/p1c_Qgp8Px0?ecver=1 " frameborder="0 " allow="autoplay; encrypted-media " allowfullscreen> </iframe>
            </div>
            <div class="col-md-3 ">
                <iframe width="420 " height="315 " src="https://www.youtube.com/embed/qVU3V0A05k8?list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-&amp;ecver=1 " frameborder="0 " allow="autoplay; encrypted-media " allowfullscreen> </iframe>
            </div>
            <div class="col-md-3 ">
                <iframe width="420 " height="315 " src="https://www.youtube.com/embed/U8XF6AFGqlc?ecver=1 " frameborder="0 " allow="autoplay; encrypted-media " allowfullscreen> </iframe>
            </div>
            <div class="col-md-3 ">
                <iframe width="420 " height="315 " src="https://www.youtube.com/embed/JnCLmLO9LhA?ecver=1 " frameborder="0 " allow="autoplay; encrypted-media " allowfullscreen> </iframe>
            </div>
        </div>
    </div>
    <div class="modal fade title1 " id="developers ">
        <div class="modal-dialog ">
            <div class="modal-content text-center ">
                <div class="modal-header ">
                    <button type="button " class="close " data-dismiss="modal "><span aria-hidden="true ">&times;</span><span class="sr-only ">Close</span></button>
                    <h4 class="modal-title " style="font-family: 'typo' "><span style="color:orange ">Developers</span></h4> </div>
                <div class="modal-body ">
                    <div>
                        <h1>Saint Louis University</h1> </div>
                    <div class="row ">
                        <div class="col-md-4 "> <img src="image/Balinag.jpg " width=100 height=100 alt="John Rey Balinag " class="img-rounded ">
                            <p>John Rey Balinag</p>
                        </div>
                        <div class="col-md-4 "> <img src="image/jorquia.jpg " width=100 height=100 alt="Jan-mae Jorquia " class="img-rounded ">
                            <p>Jan-mae Jorquia</p>
                        </div>
                        <div class="col-md-4 "> <img src="image/cacho.PNG " width=100 height=100 alt="YZ Cacho " class="img-rounded ">
                            <p>YZ Cacho</p>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-6 "> <img src="image/tungcul.jpg " width=100 height=100 alt="Camille Tungcul " class="img-rounded ">
                            <p>Camille Tungcul</p>
                        </div>
                        <div class="col-md-6 "> <img src="image/rubrico.png " width=100 height=100 alt="Abigail Rubrico " class="img-rounded ">
                            <p>Abigail Rubrico</p>
                        </div>
                    </div>
                    <p>This course website was built to provide knowledge about web development specifically frontend functionalities and backend scripting. Additionally this course website provides information about web app security risks and ways to prevent them.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade " id="login ">
        <div class="modal-dialog ">
            <div class="modal-content ">
                <div class="modal-header ">
                    <button type="button " class="close " data-dismiss="modal "><span aria-hidden="true ">&times;</span><span class="sr-only ">Close</span></button>
                    <h4 class="modal-title "><span style="color:orange;font-family: 'typo' ">LOGIN</span></h4> </div>
                <div class="modal-body title1 ">
                    <div class="row ">
                        <div class="col-md-3 "></div>
                        <div class="col-md-6 ">
                            <form role="form " method="post " action="admin.php?q=index.php ">
                                <div class="form-group ">
                                    <input type="text " name="uname " maxlength="20 " placeholder="Admin " class="form-control " /> </div>
                                <div class="form-group ">
                                    <input type="password " name="password " maxlength="15 " placeholder="Password " class="form-control " /> </div>
                                <div class="form-group " align="center ">
                                    <input type="submit " name="login " value="Login " class="btn btn-primary " /> </div>
                            </form>
                        </div>
                        <div class="col-md-3 "></div>
                    </div>
                </div>
                <div class="modal-footer ">
                    <p>use credentials</p>
                    <p>Admin: balinagrey@gmail.com</p>
                    <p>Password: admin</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg1 ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-6 "> <img src="image/test.png " style="padding-top:35px; " width=360 alt="Test " class="img-center img-rounded "></div>
                <div class="col-md-4 panel ">
                    <form class="form-horizontal " name="form " action="sign.php?q=account.php " onSubmit="return validateForm() " method="POST ">
                        <fieldset>
                            <div class="form-group ">
                                <label class="col-md-12 control-label " for="name "></label>
                                <div class="col-md-12 ">
                                    <input id="name " name="name " placeholder="Enter your name " class="form-control input-md " type="text "> </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-md-12 control-label " for="gender "></label>
                                <div class="col-md-12 ">
                                    <select id="gender " name="gender " placeholder="Enter your gender " class="form-control input-md ">
                                        <option value="Male ">Select Gender</option>
                                        <option value="M ">Male</option>
                                        <option value="F ">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-md-12 control-label " for="name "></label>
                                <div class="col-md-12 ">
                                    <input id="college " name="college " placeholder="Enter your college/university name " class="form-control input-md " type="text "> </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-md-12 control-label title1 " for="email "></label>
                                <div class="col-md-12 ">
                                    <input id="email " name="email " placeholder="Enter your email " class="form-control input-md " type="email "> </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-md-12 control-label " for="mob "></label>
                                <div class="col-md-12 ">
                                    <input id="mob " name="mob " placeholder="Enter your mobile number " class="form-control input-md " type="number "> </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-md-12 control-label " for="password "></label>
                                <div class="col-md-12 ">
                                    <input id="password " name="password " placeholder="Enter your password " class="form-control input-md " type="password "> </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-md-12control-label " for="cpassword "></label>
                                <div class="col-md-12 ">
                                    <input id="cpassword " name="cpassword " placeholder="Confirm Password " class="form-control input-md " type="password "> </div>
                            </div>
                            <?php if (@$_GET['q7']) {
                        echo '<p style="color:red;font-size:15px; ">' . @$_GET['q7'];
                    } ?>
                                <div class="form-group ">
                                    <label class="col-md-12 control-label " for=" "></label>
                                    <div class="col-md-12 ">
                                        <input type="submit " class="sub " value="sign up " class="btn btn-primary " /> </div>
                                </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row footer ">
        <div class="col-md-6 box "> <img src="image/team.svg " width="160 "> <a href="# " data-toggle="modal " data-target="#developers ">Developers</a> </div> <span></span>
        <div class="col-md-6 box "> <img src="image/feedback.svg " width="140 "> <a href="feedback.php " target="_blank ">Feedback</a></div>
    </div>
    <footer class="footer ">
        <p>Baguio City, Philippines 2600, (+63)977-826-4922 © Webtechnology Copyright 2018</p>
    </footer>
</body>

</html>