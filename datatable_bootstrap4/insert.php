<?php
	include('db.php');
	include('function.php');
	if(isset($_POST["operation"]))
	{
		if($_POST["operation"] == "Add")
		{
			$image = '';
			if($_FILES["user_image"]["name"] != '')
			{
				$image = upload_image();
			}
			$image2 = '';
			if($_FILES["user_image2"]["name"] != '')
			{
				$image2 = upload_image2();
			}
			$statement = $connection->prepare("
				INSERT INTO users (first_name, last_name, image, image2) 
				VALUES (:first_name, :last_name, :image, :image2)
			");
			$result = $statement->execute(
				array(
					':first_name'	=>	$_POST["first_name"],
					':last_name'	=>	$_POST["last_name"],
					':image'		=>	$image,
					':image2'		=>	$image2
					
				)
			);
			if(!empty($result))
			{
				echo 'Data Inserted';
			}
		}
		

		
		if($_POST["operation"] == "Edit")
		{
			$image = '';
			if($_FILES["user_image"]["name"] != '')
			{
				$image = upload_image();
			}
			else
			{
				$image = $_POST["hidden_user_image"];
			}
			$image2 = '';
			if($_FILES["user_image2"]["name"] != '')
			{
				$image2 = upload_image2();
			}
			else
			{
				$image2 = $_POST["hidden_user_image2"];
			}
			$statement = $connection->prepare(
				"UPDATE users 
				SET first_name = :first_name, last_name = :last_name,  image2 = :image2, image = :image 
				WHERE id = :id
				"
			);
			$result = $statement->execute(
				array(
					':first_name'	=>	$_POST["first_name"],
					':last_name'	=>	$_POST["last_name"],
					':image'		=>	$image,
					':image2'		=>	$image2,
					':id'			=>	$_POST["user_id"]
				)
			);
			if(!empty($result))
			{
				echo 'Data Updated';
			}
		}
	}