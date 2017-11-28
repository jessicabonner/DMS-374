<?php
	
	require "DMS_db.php";
	
	$user_id=$_GET['user_id'];
	
        
		/* 
		$statement = $dbc->prepare("SELECT * FROM student_info WHERE user_id = :user_id");
		$statement->execute(array(':user_id' => $user_id));
		$row = $statement->fetch(); */
		
		$stmt = $dbc->query("SELECT * FROM student_info WHERE user_id = $user_id");
		$row = $stmt->fetch();
		

        ?>

        <form action="DMS_Edit_Profile_Information_Connect.php" method="post">
            First Name
            <input type="text" name="first_name" value="<?php echo $row ['first_name']; ?> " size=10>
            Middle Name
            <input type="text" name="middle_name" value="<?php echo $row ['middle_name']; ?> " size=10>
            Last Name
            <input type="text" name="last_name" value="<?php echo $row ['last_name']; ?>" size=17>
			Street Address
            <input type="text" name="address" value="<?php echo $row ['address']; ?> " size=10>
			City
            <input type="text" name="city" value="<?php echo $row ['city']; ?> " size=10>
			Zip Code
            <input type="text" name="zip_code" value="<?php echo $row ['zip_code']; ?> " size=10>
			Phone Number
            <input type="text" name="phone" value="<?php echo $row ['phone']; ?> " size=10>
			Email
            <input type="text" name="email" value="<?php echo $row ['email']; ?> " size=10>
			Middle Name
            <input type="text" name="middle_name" value="<?php echo $row ['middle_name']; ?> " size=10>
            <input type="submit" name="submit" value="Update">
        </form>
        
        </p>
    </body>
</html>