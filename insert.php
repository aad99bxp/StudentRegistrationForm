<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => form
		$conn = mysqli_connect("localhost", "root", "", "form");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$Name = $_REQUEST['Name'];
		$Father_Name = $_REQUEST['Father_Name'];
		$Mother_Name = $_REQUEST['Mother_Name'];
		$DOB = $_REQUEST['DOB'];
		$Religion = $_REQUEST['Religion'];
        $Phone = $_REQUEST['Phone'];
        $Adress1 = $_REQUEST['Adress1'];
        $Adress2 = $_REQUEST['Adress2'];
        $Country = $_REQUEST['Country'];
        $State = $_REQUEST['State'];
        $City = $_REQUEST['City'];
		$PIN = $_REQUEST['PIN'];
        $PAN = $_REQUEST['PAN'];
        $Adhaar = $_REQUEST['Adhaar'];
        $Passport = $_REQUEST['Passport'];



		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO users VALUES ('$Name',
			'$Father_Name','$Mother_Name','$DOB','$Religion','$Phone','$Adress1','$Adress2','$Country','$State','$City','$PIN','$PAN','$Adhaar',$Passport)";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$Name\n $Father_Name\n "
				. "$Mother_Name\n $DOB\n $Religion\n"
                . "$Phone\n $Adress1\n $Adress2\n"
                . "$Country\n $State\n $City\n"
                . "$PIN\n $PAN\n $Adhaar\n"
                . "$Passport\n");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
