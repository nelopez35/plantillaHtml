<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap 3 Fluid Layout Example</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Tutorial Republic</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="https://www.tutorialrepublic.com" target="_blank">Home</a></li>
                    <li><a href="https://www.tutorialrepublic.com/about-us.php" target="_blank">About</a></li>
                    <li><a href="https://www.tutorialrepublic.com/contact-us.php" target="_blank">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron">
        <div class="container-fluid">
            <h1>Learn to Create Websites</h1>
            <p>In today's world internet is the most popular way of connecting with the people. At <a href="https://www.tutorialrepublic.com" target="_blank">tutorialrepublic.com</a> you will learn the essential of web development technologies along with real life practice example, so that you can create your own website to connect with the people around the world.</p>
            <p><a href="https://www.tutorialrepublic.com" target="_blank" class="btn btn-success btn-lg">Get started today</a></p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="container">
				  <h2>Basic Table</h2>
				  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
				  <table class="table">
				    <thead>
				      <tr>
				        <th>Firstname</th>
				        <th>Lastname</th>
				        <th>Email</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>John</td>
				        <td>Doe</td>
				        <td>john@example.com</td>
				      </tr>
				      
				    </tbody>
				  </table>
				</div>
            </div>
            
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12">
                <footer>
                    <p>&copy; Copyright 2013 Tutorial Republic</p>
                </footer>
            </div>
        </div>
    </div>
</body>
<script>
		$( document ).ready(function() {
			var request = $.ajax({
			  url: "php/functions.php",
			  method: "POST",
			  data: {function_name:"query" },
			  dataType: "json"
			});
			 
			request.done(function( msg ) {
				//json = JSON.parse(msg);
				$.each(msg,function(key,val){
					td = $('<tr></tr>');
					console.log(val);
					field1 = $("<td></td>").append(val.id);
					field2 = $("<td></td>").append(val.name);
					field3 = $("<td></td>").append(val.path);
					td.append(field1,field2,field3);
					$(".table").append(td);

				});
			  
			});
			 
			request.fail(function( jqXHR, textStatus ) {
			  alert( "Request failed: " + textStatus );
			});


		});
		
	</script>
</html>