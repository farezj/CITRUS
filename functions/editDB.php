<?php
  require $_SERVER['DOCUMENT_ROOT'].'/CITRUS/functions/sqlFunc.php';
  $limitconfig= updateConfig();
  //limitConfig[x][y], where x is CNC, y is value from DB table
  //DB table(y) - CNC, tankCapacity, coolantLvMax, concentration, coolantLv, concentrationLimit, coolantLvLimit
  
  if(isset($_POST['submit'])){
  	$limitconfig[0][0]=($_POST['CNC1']);
  	$limitconfig[0][1]=($_POST['Tank_Capacity1']);
  	$limitconfig[0][2]=($_POST['Coolant_Max_LVL1']);
  	$limitconfig[0][3]=($_POST['concentration1']);
  	$limitconfig[0][4]=($_POST['coolant_level1']);
  	$limitconfig[0][5]=($_POST['concentrationlimit1']);
  	$limitconfig[0][6]=($_POST['coolant_level_limit1']);
  }

  if(isset($_POST['submit'])){
  	$limitconfig[1][0]=($_POST[ 'CNC2']);
  	$limitconfig[1][1]=($_POST['Tank_Capacity2']);
  	$limitconfig[1][2]=($_POST['Coolant_Max_LVL2']);
  	$limitconfig[1][3]=($_POST['concentration2']);
  	$limitconfig[1][4]=($_POST['coolant_level2']);
  	$limitconfig[1][5]=($_POST['concentrationlimit2']);
  	$limitconfig[1][6]=($_POST['coolant_level_limit2']);
  }

  updateSQL($limitconfig);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Coolant Calculator</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
  <script src="jquery.tabledit.min.js"></script>
  <script src="jquery-editable-select.min.js"></script>

  

<style>
  div.a {
  text-align: center;
}
.myTable { 
  width: 100%;
  text-align: center;
  background-color: lemonchiffon;
  border-collapse: collapse; 
  }
.myTable th { 
  background-color: goldenrod;
  color: white; 
  }
.myTable td, 
.myTable th { 
  padding: 10px;
  border: 1px solid goldenrod; 
  }
</style>
</head>
<center><h1><em>CNC Machine Monitoring<em></h1></center>
<body>
<center>
<form action="" method="post">
  
    <p>
    <div class="container"> 
      <div class="table-responsive">

    <table id="editable_table" class="table table-voedered table-striped">
	<tr>
    <th><center>CNC<center></th>
		<th><center>Tank Capacity<center></th>
		<th><center>Coolant Max LVL<center></th>
    <th><center>concentration<center></th>
    <th><center>coolant level<center></th>
    <th><center>concentrationLimit<center></th>
    <th><center>Coolant Limit Level<center></th>
    <th><center>Homepage<center></th>
    <th><center>CALCULATE<center></th>
    
	<tr>


 
   
  <td><center><input type="text" size ="6" name="CNC1" value="<?php echo $limitconfig[0][0]; ?>" <center> </td>
  <td><center><input type="text" size ="6" name="Tank_Capacity1" value="<?php echo $limitconfig[0][1]; ?>" <center></td>
  <td><center><input type="text" size="6" name='Coolant_Max_LVL1'value="<?php echo $limitconfig[0][2]; ?>" <center> </td>
  <td><center><input type="text" size="6" name='concentration1' value="<?php echo $limitconfig[0][3]; ?>" <center> </td>
  <td><center><input type="text" size="6" name='coolant_level1' value="<?php echo $limitconfig[0][4]; ?>" <center></td>
  <td><center><input type="text" size="6" name='concentrationlimit1'value="<?php echo $limitconfig[0][5]; ?>" <center> </td>
  <td><center><input type="text" size="6" name='coolant_level_limit1' value="<?php echo $limitconfig[0][6]; ?>" <center> </td>
  <td><a href="../main.php" class="btn btn-primary">Homepage</a></td>
  <td><center><input name='submit' type='submit' value='submit' ></input><center></td>
  

  
  <tr>

  <td><center><input type="text" size="6" name="CNC2" value="<?php echo $limitconfig[1][0]; ?>" <center> </td>
  <td><center><input type="text" size="6" name="Tank_Capacity2" value="<?php echo $limitconfig[1][1]; ?>" <center> </td>
  <td><center><input type="text" size="6" name='Coolant_Max_LVL2'value="<?php echo $limitconfig[1][2]; ?>" <center> </td>
  <td><center><input type="text" size="6" name='concentration2' value="<?php echo $limitconfig[1][3]; ?>" <center> </td>
  <td><center><input type="text" size="6" name='coolant_level2' value="<?php echo $limitconfig[1][4]; ?>" <center></td>
  <td><center><input type="text" size="6" name='concentrationlimit2'value="<?php echo $limitconfig[1][5]; ?>" <center> </td>
  <td><center><input type="text" size="6" name='coolant_level_limit2' value="<?php echo $limitconfig[1][6]; ?>" <center> </td>
  <td><a href="../main.php"class="btn btn-primary">Homepage</a></td>
  <td><center><input name='submit' type='submit' value='submit' ></input><center></td>

  <?php
  
  echo "How to use this page: Press the HOMEPAGE button to go back to the view page.<br>";
  echo 'You can edit any values in the website and click on SUBMIT to refresh the values to the new ones.';
  

  ?>
  
  </tr>
</form>

</body>
</html>



