<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Student Registration</title>

	<style>
.header{
  padding: 60px;
  text-align: center;
  background: #000000;
  color: white;
  font-size: 30px;
  border-radius:30px;
}

.footer{
  text-align: center;
  background:black;
  color: white;
  font-size: 30px;
  margin-top: 20px;
  border-radius:10px;
  height: 50px;
}

</style>

</head>


<body>
<header class="header">
    <h1 style="text-color:white;"> Student Registration </h1>
</header>

	<center>

		<form action="insert.php" method="post">
			
			
<p>
				<label for="Name">Name:</label>
				<input type="text" name="Name" id="name">
			</p>



			
			
<p>
				<label for="Father Name">Father Name:</label>
				<input type="text" name="Father_Name" id="father_name">
			</p>



			
			
<p>
				<label for="Mother Name">Gender:</label>
				<input type="text" name="Mother_Name" id="mother_name">
			</p>


			
			
			
<p>
				<label for="DOB">DOB:</label>
				<input type="date" name="DOB" id="dob">
			</p>


			
			
			
<p>
				<label for="Phone Number">Phone Number:</label>
				<input type="int" name="Phone" id="phone">
			</p>



<p>
				<label for="Religion">Religion:</label>
				<input type="text" name="Religion" id="religion">
			</p>


<p>
				<label for="Adress1">Adress1:</label>
				<input type="text" name="Adress1" id="adress1">
			</p>

<p>
				<label for="Adress2">Adress2:</label>
				<input type="text" name="Adress2" id="adress2">
			</p>


<p>
				<label for="Country">Country:</label>
				<input type="text" name="Country" id="country">
			</p>


<p>
				<label for="State">State:</label>
				<input type="text" name="State" id="state">
			</p>


<p>
				<label for="City">City:</label>
				<input type="text" name="City" id="City">
			</p>

            
<p>
				<label for="PIN">PIN:</label>
				<input type="text" name="PIN" id="PIN">
			</p>


<p>
				<label for="PAN">PAN:</label>
				<input type="text" name="PAN" id="PAN">
			</p>

        
<p>
				<label for="Adhaar">Adhaar:</label>
				<input type="text" name="Adhaar" id="Adhaar">
			</p>


<p>
				<label for="Passport">Passport:</label>
				<input type="text" name="Passport" id="Pssport">
			</p>


			<input type="submit" value="Register" style="background-color:black; color:white; font-size:30px; paddling-top:10px; border-radius:10px;">
		</form>
	</center>

	<footer class="footer">
    <h6 style="text-color:white;"> Designed by Abhay Aditya Dubey </h6>
</header>
</body>

</html>
