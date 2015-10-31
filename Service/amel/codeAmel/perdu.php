<!DOCTYPE html>
<html>
    <head>
        <title>FDJ - Testez votre ticket ! </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <!-- Font-Awesome -->
        <link href="Font-Awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- My style -->
        <link href="bootstrap.css" rel="stylesheet" media="screen">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
                    <h2><img class="img" src="images/logo_FDJ.png" style="width:200px; height:100px;"/></h2>
                    <hr />
    </div>
    <div class="col-md-2">
        <ul class="nav nav-pills nav-stacked" style="width:200px; height:100px;">
			<li role="presentation" class="active"><a href="#"><strong> <em>LOTO </em></strong> </a></li>
			<li role="presentation"><a href="#"><strong>Euro Million</strong></a></li>
			<li role="presentation"><a href="#"><strong>Autres</strong></a></li>
		</ul>
    </div>
    
    <div class="col-md-10" align="center" >
        <form method="post" action="client.php">
		<div class="container">
			<div class="col-md-1 col-md-offset-1"><br>
				<img class="img" src="images/numeros_loto.png" /><br><br><br>
				<img class="img" src="images/Capture.png" /> 
			</div>
			
			<div class="col-md-3">
                 
				<div class="input-group">
                    
							<input type="number" name="numero1" class="form-control" style="width:50px; height:50px;">
							<input type="number" name="numero2" class="form-control" style="width:50px; height:50px;">
							<input type="number" name="numero3" class="form-control" style="width:50px; height:50px;">
							<input type="number" name="numero4" class="form-control" style="width:50px; height:50px;">
							<input type="number" name="numero5" class="form-control" style="width:50px; height:50px;">



				</div><br>
				<input type="number" class="form-control" style="width:50px; height:50px;">  </td>
			</div>
			
			<div class="col-md-4">
				<img src="images/loto.jpg" class="img-responsive img-circle" alt="Responsive image" style="-ms-transform: rotate(15deg); -webkit-transform: rotate(15deg);"/>
			</div>
	
		</div>
		<div class="container center"><br><br><br><br><br><br>
		  <!-- BUTTON -->
          <input type="submit" name="btn" value="Testez votre ticket" id="submitBtn" data-toggle="modal" data-target="#myModal" class="btn btn-warning btn-lg" />

		  <!-- Modal -->
		  <div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
			  <!-- Modal content-->
			  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4 class="modal-title">Modal Header</h4>
					</div>
					<div class="modal-body">
					  <p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
			  </div>
			  
			</div>
		  </div>
		  
		</div>
    </div>
   </form>
  </div>
</div>
      
    </body>
    <footer>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </footer>
</html>