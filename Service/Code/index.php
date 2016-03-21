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
                    <h2><a href="./"> <img class="img" src="images/logo_FDJ.png" style="width:200px; height:100px;"/></a></h2>
                    <hr />
    </div>
    <div class="col-md-2">
        <ul class="nav nav-pills nav-stacked" style="width:200px; height:100px;">
<?php    
            if (isset($_GET['x'])){

                if ($_GET['x'] == 'loto'){
?>
			<li role="presentation" class="active"><a href="index.php?x=loto"><strong> <em>LOTO </em></strong> </a></li>
			<li role="presentation"><a href="index.php?x=euro"><strong>Euro Million</strong></a></li>
			<li role="presentation"><a href="index.php?x=joker"><strong>Jocker+</strong></a></li>

<?php
                }elseif ($_GET['x'] == 'euro') {
?>
            <li role="presentation"><a href="index.php?x=loto"><strong> <em>LOTO </em></strong> </a></li>
            <li role="presentation" class="active"><a href="index.php?x=euro"><strong>Euro Million</strong></a></li>
            <li role="presentation"><a href="index.php?x=joker"><strong>Jocker+</strong></a></li>
 <?php 
                }elseif ($_GET['x'] == 'joker') {
?>
            <li role="presentation"><a href="index.php?x=loto"><strong> <em>LOTO </em></strong> </a></li>
            <li role="presentation"><a href="index.php?x=euro"><strong>Euro Million</strong></a></li>
            <li role="presentation" class="active"><a href="index.php?x=joker"><strong>Jocker+</strong></a></li>
<?php
                }

            }else{
 ?>        
            <li role="presentation"><a href="index.php?x=loto"><strong> <em>LOTO </em></strong> </a></li>
            <li role="presentation"><a href="index.php?x=euro"><strong>Euro Million</strong></a></li>
            <li role="presentation"><a href="index.php?x=joker"><strong>Jocker+</strong></a></li>
 <?php                  
                }
?>
		</ul>
    </div>
 
  
    <div class="col-md-10" align="center" >
<?php    
    if (isset($_GET['x'])){

      if ($_GET['x'] == 'loto'){
?> 
      <form method="post" action="client.php?x=loto">
    		<div class="container">
    			<div class="col-md-1 col-md-offset-1"><br>
                    <br><br>
    				<img class="img" src="images/numeros_loto.png" /><br><br><br>
    				<img class="img" src="images/Capture.png" /> 
    			</div>
    			
    			<div class="col-md-4">
                     <label style="font-family:Arial; color:blue; size:20;">Entrez les numéros de votre ticket :</label>
                     <br><br>
    				<div class="input-group">
                        
    							<input type="number" name="numero1" class="form-control" style="width:60px; height:50px;" min="1" max="49">
    							<input type="number" name="numero2" class="form-control" style="width:60px; height:50px;" min="1" max="49">
    							<input type="number" name="numero3" class="form-control" style="width:60px; height:50px;" min="1" max="49">
    							<input type="number" name="numero4" class="form-control" style="width:60px; height:50px;" min="1" max="49">
    							<input type="number" name="numero5" class="form-control" style="width:60px; height:50px;" min="1" max="49">

    				</div><br>
    				<input type="number" name="numeroChance" class="form-control" style="width:60px; height:50px;" min="1" max="10"> 
    			</div>
    			
    			<div class="col-md-4">
    				<img src="images/loto.png" class="img-responsive img-circle" alt="Responsive image" style="-ms-transform: rotate(15deg); -webkit-transform: rotate(15deg); height :100px; width:200px;"/>
    			</div>

    		</div>
    		<div ><br><br><br><br><br><br>
    		  <!-- BUTTON -->
              <input type="submit" name="btn" value="Testez votre ticket" id="submitBtn" class="btn btn-warning btn-lg" />
    		  
    		</div>
        </div>
      </form>
<?php
      }elseif ($_GET['x'] == 'euro') {
?>
     <form method="post" action="client.php?x=euro">
            <div class="container">
                <div class="col-md-1 col-md-offset-1"><br>
                    <br><br>
                    <img class="img" src="images/numeros_loto.png" /><br><br><br>
                    <img class="img" src="images/etoile.png" /> 
                </div>
                
                <div class="col-md-4">
                     <label style="font-family:Arial; color:blue; size:20;">Entrez les numéros de votre ticket :</label>
                     <br><br>
                    <div class="input-group">
                        
<<<<<<< HEAD
                                <input type="number" name="numero1" class="form-control" style="width:60px; height:50px;" min="1" max="50">
                                <input type="number" name="numero2" class="form-control" style="width:60px; height:50px;" min="1" max="50">
                                <input type="number" name="numero3" class="form-control" style="width:60px; height:50px;" min="1" max="50">
                                <input type="number" name="numero4" class="form-control" style="width:60px; height:50px;" min="1" max="50">
                                <input type="number" name="numero5" class="form-control" style="width:60px; height:50px;" min="1" max="50">

                    </div><br>
                    <div class="input-group">
                                <input type="number" name="etoile1" class="form-control" style="width:60px; height:50px;" min="1" max="11">
                                <input type="number" name="etoile2" class="form-control" style="width:60px; height:50px;" min="1" max="11">
=======
                                <input type="number" name="numero1" class="form-control" style="width:60px; height:50px;" min="1" max="49">
                                <input type="number" name="numero2" class="form-control" style="width:60px; height:50px;" min="1" max="49">
                                <input type="number" name="numero3" class="form-control" style="width:60px; height:50px;" min="1" max="49">
                                <input type="number" name="numero4" class="form-control" style="width:60px; height:50px;" min="1" max="49">
                                <input type="number" name="numero5" class="form-control" style="width:60px; height:50px;" min="1" max="49">

                    </div><br>
                    <div class="input-group">
                                <input type="number" name="etoile1" class="form-control" style="width:60px; height:50px;" min="1" max="10">
                                <input type="number" name="etoile2" class="form-control" style="width:60px; height:50px;" min="1" max="10">
>>>>>>> 883393d0f1260534846a2922cfe4229fdc20f95f
                    </div>
                    
                </div>
                
                <div class="col-md-4">
                    <img src="images/euromillions.jpg" class="img-responsive img-circle" alt="Responsive image" style="-ms-transform: rotate(15deg); -webkit-transform: rotate(15deg); height :100px; width:200px;"/>
                </div>

            </div>
            <div ><br><br><br><br><br><br>
              <!-- BUTTON -->
              <input type="submit" name="btn" value="Testez votre ticket" id="submitBtn" class="btn btn-warning btn-lg" />
              
            </div>
        </div>
      </form>
<?php
      }elseif ($_GET['x'] == 'joker') {
?>
     <form method="post" action="client.php?x=joker">
            <div class="container">
                <div class="col-md-1 col-md-offset-1"><br>
                    <br><br>
                    <img class="img" src="images/numero.png" /><br><br><br>
                </div>
                
                <div class="col-md-6">
                     <label style="font-family:Arial; color:blue; size:20;">Entrez les numéros de votre ticket :</label>
                     <br><br>
                    <div class="input-group">
                        
<<<<<<< HEAD
                                <input type="number" name="numero1" class="form-control" style="width:60px; height:50px;" min="0" max="9">
                                <input type="number" name="numero2" class="form-control" style="width:60px; height:50px;" min="0" max="9">
                                <input type="number" name="numero3" class="form-control" style="width:60px; height:50px;" min="0" max="9">
                                <input type="number" name="numero4" class="form-control" style="width:60px; height:50px;" min="0" max="9">                        
                                <input type="number" name="numero5" class="form-control" style="width:60px; height:50px;" min="0" max="9">
                                <input type="number" name="numero6" class="form-control" style="width:60px; height:50px;" min="0" max="9">
                                <input type="number" name="numero7" class="form-control" style="width:60px; height:50px;" min="0" max="9">
=======
                                <input type="number" name="numero1" class="form-control" style="width:60px; height:50px;" min="0" max="49">
                                <input type="number" name="numero2" class="form-control" style="width:60px; height:50px;" min="0" max="49">
                                <input type="number" name="numero3" class="form-control" style="width:60px; height:50px;" min="0" max="49">
                                <input type="number" name="numero4" class="form-control" style="width:60px; height:50px;" min="0" max="49">                        
                                <input type="number" name="numero5" class="form-control" style="width:60px; height:50px;" min="0" max="49">
                                <input type="number" name="numero6" class="form-control" style="width:60px; height:50px;" min="0" max="49">
                                <input type="number" name="numero7" class="form-control" style="width:60px; height:50px;" min="0" max="49">
>>>>>>> 883393d0f1260534846a2922cfe4229fdc20f95f

                    </div>
                </div>
                
                <div class="col-md-2">
                    <img src="images/joker.jpg" class="img-responsive img-circle" alt="Responsive image" style="-ms-transform: rotate(15deg); -webkit-transform: rotate(15deg); height :100px; width:200px;"/>
                </div>

            </div>
            <div ><br><br><br><br><br><br>
              <!-- BUTTON -->
              <input type="submit" name="btn" value="Testez votre ticket" id="submitBtn" class="btn btn-warning btn-lg" />
              
            </div>
        </div>
      </form>
<?php
      }     
    }else{
?>
      <img class="img" src="images/ecran.png" />
<?php
      } 
 ?>   
    </div>

</div>
      
    </body>
    <footer>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </footer>
</html>