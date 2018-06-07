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
    <div class="nav-container"> </div>
    <div id="content">
        <center><img src="../images/nodejs.svg" alt="node.js" width="200"></center> <br>
           <h2>Node.js</h2>
          <p>Node.js can generate dynamic page content,
            create, open, read, write, delete, and close files on the server, collect form data
            and can add, delete, modify data in your database.</p>     
        <p>Chrome's V8 JavaScript engine is where the Node.js was built. It takes the JavaScript 
            code and converts it into a faster machine code(Machine code is a low level code that 
            our computer interprets without using other interpreter). Node.js is a JavaScript runtime 
            that uses an event-driven and non-blocking I/O model that constructs it lightweight and efficient.
            And it has the largest open source libraries ecosystem in the world the npm(Node Package Manager). 
            Node.js uses JavaScript on the server,  runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.), free and an open source server environment.
        </p><br><br>

        <h2>Node.js Features</h2>
        <ul>
            <li>Asynchronous and Event Driven </li>
            <li>Very faster</li>
            <li>Single Threaded but Highly Scalable</li>
            <li>No Buffering </li>
            <li>License  </li>
        </ul>   

             
         <center><img src="../images/js.png">
         <p>Blocking I/O (left) vs Non-Blocking I/O (right) <br>
(Image by freeCodeCamp.org)
</p></center>

        <h2>Blocking I/O</h2>
        <p>In blocking I/O method user2's data request is not yet started and initiated  until user1’s data is not yet completed.</p>

        <h2>Non-blocking I/O</h2>
        <p>And on the other hand non-blocking I/O request allows user2s request to be instantiated without waiting for the user1s request to be completed.</p>
        <p>This non-blocking I/O eliminates the need for multi-threading, since the server can handle multiple requests at the same time.
</p>
       
      

        <h2>To Start Node.js here are some Prerequisites</h2>
        <ul>
            <li><a href="https://nodejs.org/en/download/">node.js</a></li>
            <li><a href="http://www.wampserver.com/en/">WAMP</a> for MYSQL database</li> <pre><code>npm install mysql</code></pre>
            <li><a href="https://www.mongodb.com/download-center?jmp=homepage#atlas">MongoDB</a> for MongoDB database</li> <pre><code>npm install mongoose</code></pre> </ul>
        <h2>Create a <code>package.json</code></h2>
        <h2>Requirements</h2>
        <p>A <code>package.json</code> must have:</p>
        <ul>
            <li><code>&quot;name&quot;</code>
                <ul>
                    <li>all lowercase</li>
                    <li>one word, no spaces</li>
                    <li>dashes and underscores allowed</li>
                </ul>
            </li>
            <li><code>&quot;version&quot;</code>
                <ul>
                    <li>in the form of <code>x.x.x</code></li>
                    <li>follows <a href="https://docs.npmjs.com/getting-started/semantic-versioning">semver spec</a></li>
                </ul>
            </li>
        </ul>
        <p>For example:</p> <pre><code>{
  &quot;name&quot;: &quot;my-package&quot;,
  &quot;version&quot;: &quot;1.0.0&quot;
}
</code></pre>
        <h2>I. Creating a <code>package.json</code></h2>
        <p>There are two basic ways to create a package.json file.</p>
        <h3>a. Run a CLI questionnaire</h3>
        <p>To create a <code>package.json</code> with values that you supply, run:</p> <pre><code>&gt; npm init
</code></pre>
        <p>This will initiate a command line questionnaire that will conclude with the creation of a <code>package.json</code> in the directory in which you initiated the command.</p>
        <h3>b. Create a default <code>package.json</code></h3>
        <p>To get a default <code>package.json</code>, run <code>npm init</code> with the <code>--yes</code> or <code>-y</code> flag:</p> <pre><code>&gt; npm init --yes
</code></pre>
        <p>This method will generate a default <code>package.json</code> using information extracted from the current directory.</p> <pre><code>&gt; npm init --yes
Wrote to /home/project/my_package/package.json:

{
  &quot;name&quot;: &quot;my_package&quot;,
  &quot;description&quot;: &quot;&quot;,
  &quot;version&quot;: &quot;1.0.0&quot;,
  &quot;main&quot;: &quot;index.js&quot;,
  &quot;scripts&quot;: {
    &quot;test&quot;: &quot;echo \&quot;Error: no test specified\&quot; &amp;&amp; exit 1&quot;
  },
  &quot;repository&quot;: {
    &quot;type&quot;: &quot;git&quot;,
    &quot;url&quot;: &quot;https://github.com/janr22/my_package.git&quot;
  },
  &quot;keywords&quot;: [],
  &quot;author&quot;: &quot;&quot;,
  &quot;license&quot;: &quot;ISC&quot;,
  &quot;bugs&quot;: {
    &quot;url&quot;: &quot;https://github.com/janr22/my_package/issues&quot;
  },
  &quot;homepage&quot;: &quot;https://github.com/janr22/my_package&quot;
}
</code></pre>
        <ul>
            <li><code>name</code>: the current directory name</li>
            <li><code>version</code>: always <code>1.0.0</code></li>
            <li><code>description</code>: info from the readme, or an empty string <code>&quot;&quot;</code></li>
            <li><code>main</code>: always <code>index.js</code></li>
            <li><code>scripts</code>: by default creates an empty <code>test</code> script</li>
            <li><code>keywords</code>: empty</li>
            <li><code>author</code>: empty</li>
            <li><code>license</code>: <a href="https://opensource.org/licenses/ISC"><code>ISC</code></a></li>
            <li><code>bugs</code>: info from the current directory, if present</li>
            <li><code>homepage</code>: info from the current directory, if present</li>
        </ul>
        <p>You can also set several config options for the init command. Some useful ones:</p> <pre><code>&gt; npm set init.author.email &quot;<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0d7a62606f6c794d637d60677e236e6260">[email&#160;protected]</a>&quot;
&gt; npm set init.author.name &quot;ag_dubs&quot;
&gt; npm set init.license &quot;MIT&quot;
</code></pre>
        <h2>II. Adding Dependencies</h2>
        <h2>Method 1</h2>
        <p>The easier (and more awesome) way to add dependencies to your package.json is to do so from the command line, flagging the npm install command with either --save or --save-dev, depending on how you'd like to use that dependency.</p>
        <ul>
            <li>"dependencies": These packages are required by your application in production.</li> <pre><code>npm install &lt;package_name> --save</code></pre>
            <li>"devDependencies": These packages are only needed for development and testing.</li> <pre><code>npm install &lt;package_name> --save-dev</code></pre> </ul>
        <h2>Method 2</h2>
        <p>By manually editing your package.json and after adding dpendencies to your file run npm install, npm willlook at the dependencies that are listed in that file and download it. All downloaded dependencies are stored in node_module.</p> <pre>
<code>
{
  "name": "my_package",
  "version": "1.0.0",
  "dependencies": {
    "my_dep": "^1.0.0"
  },
  "devDependencies" : {
    "my_test_framework": "^3.1.0"
  }
}
</code>
</pre>
        <h2>III. Create Node JS Application file</h2>
        <p>We will create a main entry file of nodejs application like <code>app.js or index.js</code> file,This file will use to instantiate all module and create connection with MySQL.</p> <pre><code>//Module dependencies
var express = require('express')
  , routes = require('./routes')
  , user = require('./routes/user')
  , http = require('http')
  , path = require('path');</code></pre> <pre><code>//Environments        
app.set('port', process.env.PORT || 8080);
app.set('views', __dirname + '/views');
app.set('view engine', 'ejs');
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());
app.use(express.static(path.join(__dirname, 'public')));</code></pre> <pre><code>//Middleware
app.listen(8080)</code></pre>
        <h2>IV. Run the server</h2>
        <p>a. Open cmd</p>
        <p>b. Navigate to your project, where app.js or server.js is located.</p>
        <p>c. In cmd type</p> <pre><code>node app</code></pre> or <pre><code>node server</code></pre> </div>
    <div class="container">
        <ul class="pager">
            <li><a href="1.html">Previous</a></li>
            <li><a href="3.html">Next</a></li>
        </ul>
    </div>
</body>