<?php
session_start();
include('config.php');
 if(!isset($_SESSION['username']))
	  {
	   header("Location:login.php");
	  }

?>
<html>
    <head>
  <!--Import Google Icon Font-->
      <link href="vendors/fonts.css" rel="stylesheet">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="vendors/materialize.min.css">
     <script type = "text/javascript" src = "vendors/jquery-2.1.1.min.js"></script>
      <script src = "vendors/materialize.min.js">
      </script> 
      <script src='vendors/jquery.min.js'>
        </script>
 
    </head>

<body background="images/bg.png">
 

  <nav style="background:#990000">
 
    <div class="nav-wrapper c-gradient">
       <div class="container">
        <a href="teacher/teacherdash.php" class="brand-logo">Results</a>
        </div>
    </div>
</nav>
<div class="container">
	<div class="row">
        <div class="col s12 m12 " style="margin-top: 5%">
            <div class="card hoverable" id="result">
                <div class="card-content">
                <table class="striped highlight">
						<th>COURSE</th>
						<th></th>
                        <?php
				
				$testid=$_GET['testid'];
				
				
				$query1=mysqli_query($con,"SELECT DISTINCT course FROM result WHERE result.qid='$testid'");
				if(mysqli_num_rows($query1)>0)
				{
			   while( ($test = mysqli_fetch_array($query1)))
			   {
			   		echo "<tr><td>".$test['course']."</td>";
					echo "<td><a href='resultteach1.php?testid=".$testid."&course=".$test['course']."'>View Result</a></td></tr>";
					
			   }
			   }
			    else
			   {
			   echo "<h1> Sorry, nothing to display!</h1>";
			   }
			   
				
				?>
					</table>
                        
                </div>
             </div>
         </div>
    </div>
</div>