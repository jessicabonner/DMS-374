<?php
if($_GET['key'] && $_GET['reset'])
{
	require "DMS_db.php";
	$email=$_GET['key'];
	$pass=$_GET['reset'];
 
	//$sql="SELECT student_info.email, user.password from student_info INNER JOIN user ON student_info.user_id = user.user_id WHERE md5(student_info.email)='".$email."' AND md5(user.password)='".$pass."'";
	$sql="SELECT student_info.email, user.password from student_info INNER JOIN User ON student_info.user_id = User.user_id WHERE student_info.email ='".$email."' AND User.password ='".$pass."'";
	$x=$dbc->prepare($sql);
	$x->execute();
	
	//$x = $sql->fetch();
	//$stmt->execute();
	
	  if (count($x)==1)
	  {
		    ?>
			
			<body>
				<form name="new_password" action = "DMS_submit_new_password.php" method= "post">
	
			
		    <!--<form method="post" action="submit_new.php">-->
		    <input type="hidden" name="email" value="<?php echo $email;?>">
			<tr>
				<td><p>Enter New password</p></td>
			</tr>
			<tr>
				<td><input type="text" name="password" size="20" maxlength="30" required/></td>
			</tr>
		    <!--<input type="text" name='password'>-->
			<tr>
				<td><p>Re-enter New password<p></td>
			
				<td><input type="text" name="password_2" size="20" maxlength="30" required/></td>
			</tr>
			<tr>
		    <!--<input type="submit" name="submit_password">-->
			<td colspan="1" style="text-align: center; float: center;"><p><input type="submit" value="Reset" name="submit_password" style="background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;"/> </p></td>
		</tr>
		    </form>
		    <?php
	  }  
}
?>