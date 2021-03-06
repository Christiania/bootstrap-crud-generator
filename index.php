<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Bootstrap 3 CRUD Generator">
    <meta name="author" content="Davis E. Ford">
    <title>Bootstrap CRUD Generator</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

</head>


<body>
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h2>Bootstrap CRUD Generator <br/>
                <small>A painless way to create PHP/MySQL/Bootstrap CRUD apps</small>
            </h2>
            <p>Generate a basic Bootstrap-themed CRUD (Create, Read, Update, Delete) application
                based on your MySQL SELECT, UPDATE, or CREATE query.</p>
            <p>This application takes advantage of GreenLion's <a href="https://github.com/greenlion/PHP-SQL-Parser">PHP
                    SQL Parser</a>.</p>
            <p>Download the source from <a href="https://github.com/daviseford/bootstrap-crud-generator">Github</a>.</p>
        </div>
    </div>

    <hr/>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form id="sqlEntry" action="parse.php">
                <!-- Textarea -->
                <div class="form-group">
                    <div class="col-md-5">
                        <label class="control-label" for="textarea">Submit sample "SELECT", "UPDATE", or "CREATE" SQL
                            query to
                            the right.
                            It will
                            be parsed into a basic bootstrap CRUD application.</label>
                        <h4 class="text-center">Sample Submission</h4>
<pre>
/*-----------------------------------------------*\
You MUST have a key named `id` at the moment.
Future versions may do away with that requirement
/*-----------------------------------------------*\

----- CREATE Example -----
CREATE TABLE `sampleTable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `configValue` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

----- UPDATE Example -----
UPDATE `sampleSchema`.`sampleTable`
SET
`id` = 1,
`configValue` = 'value'
WHERE `id` = 1;
</pre>
                    </div>
                    <div class="col-md-5">
                        <textarea class="form-control" id="textarea" name="textarea" rows="16"></textarea>
                        <br/>
                        <button type="submit" role="button" class="btn btn-primary btn-block">
                            Create CRUD Application
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row clearfix"></div>

    <div class="row">
        <div class="col-md-12">
            <p class="lead">Instructions</p>
            <p>Paste a MySQL CREATE, UPDATE, or SELECT statement for a table in the textarea. <br/>
                Extract the .php files to your application directory.<br/>
                Open up config.php and fill in the MySQL parameters.<br/>
                Now open list.php. You'll get a nicely formatted table of your selection.</p>
            <p class="bg-primary">You MUST have a column named `id` in your SQL for this CRUD generator to work.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <p class="small">Developed by <a href="http://daviseford.com">Davis Ford</a>, 2016
                <br/>
                Based on the function of <a href="http://www.phpscaffold.com/">phpScaffold</a>, I've just
                reworked it
                with Bootstrap.</p>
        </div>
    </div>
</div>


</body>
</html>