<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Customers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <style type="text/css">
    .logo-text, .nav-link1{
      color: white;
      padding-top: 25px;
	  	  font-size:25px;
    }
    .list-home{
      padding-left: 1100px;
	 
    }
    .nav-link1:hover{
      color: yellow;
      text-decoration: none;
    }
    .container{
		/* background-color:#dfe4ea; */
      padding-top: 30px;
      text-align: center;
    }
    .button {
      background-color: #25CCF7;
      border: none;
      color: white;
      padding: 5px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 20px;
      margin: 4px 2px;
      border-radius: 10px;
    }
    .button:hover{
      background-color: #5352ed;
      color: #212529;
    }
    .button:active{
      background-color: #55E6C1;
    }
	.row{
		color:#774936;
		font-size:25px;
	}
  h2{
text-decoration: underline;
font-family: sans-serif;
color: #03045e;
font-weight: bold;
}
th{
  text-decoration: underline;
  color: #9d4edd;
}
.footer p{
    font-family: sans-serif;
    
  }
    </style>
  


</head>
<body>
<?php
    require 'config.php';
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn,$query);
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<div class="logo"><img src=".//image/logo.png" height="130px" width="130px"></div>&nbsp;&nbsp;
<h4><p class="logo-text">Public Bank</p></h4>
<ul class="navbar-nav">
<li class="list-home">
  <a class="nav-link1" href="index.php">Home</a>
</li>
</ul>
</nav>
    <div class="container divStyle">
        <h2>Customer Details</h2>
        <br>

            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table border="4"class="table roundedCorners tabletext table-hover table-sm table-striped table-condensed">
                        <thead>
                            <tr>
                            <th scope="col">Customer Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email Id</th>
                            <th scope="col">Account Balance</th>
                            <th scope="col">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                    while($rows=mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['name']?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['credits']?></td>
                        <td><a href="selectedUserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="button">Transfer</button></a></td>
                    </tr>
                <?php
                    }
                 ?>

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            </div>

</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<footer class="footer1" align="center"> <br>
    <div  style="height: 60%">
    <p><h6>&copy; Shreya Choudhury |2022|</h6></p>
 
    </div>
  </footer>

</body>
</html>