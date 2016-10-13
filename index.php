<!--
Author: Al Hutchings 4964276
Purpose: Assignment 1 -
/Created: 23/09/16
Last updated: 23/09/16
-->


<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Assignment 2 " />
    <meta name="keywords" content="Assignment 2" />
    <title>Age Calculator</title>
    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">SWE30004 - Assignment 1</a>
            </div>
    </nav>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Age calculator</h1>
            <p>Calculate how many days you've been alive.</p>
        </div>
    </div>
    <div class="row">
        <div id="app"class="container">
          <div class="col-md-6">
            <div class="form-group">
            <form onsubmit="showAge()">
                    <Label> Enter your name </Label>
                    <input id="name" type="text" class="form-control"></input>
                    <Label>Enter your birthday</Label>
                    <input id="date" type="date" class="form-control"></input>
                    </br>
                    <!--<button type="submit" class="btn btn-default">Submit</button>-->
                    <input class="btn btn-primary" type="button" value="Calculate" onclick="showAge()"/>
                    <input class="btn btn-info" type="button" value="Show All"/>
            </form>
            </div>
          </div>
      </br>
          <div class="col-md-6">
            <div id="database"></div>
              <div id="message"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="container">

        </div>
      </div>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="calculate.js"></script>
</body>
</html>
