<?php
include('db.php');
include('function.php');
if(isset($_POST["user_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM users
		WHERE id = '".$_POST["user_id"]."'
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["first_name"] = $row["first_name"];
		$output["last_name"] = $row["last_name"];
		if($row["image"] != '')
		{
			$output['user_image'] = '<img src="upload/'.$row["image"].'"  style="max-width="100%;" class="img-thumbnailE" width="50" height="55" /><input type="hidden" name="hidden_user_image" value="'.$row["image"].'" />';
		}
		else
		{
			$output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
		}
		if($row["image2"] != '')
		{
			$output['user_image2'] = '<img src="upload/'.$row["image2"].'"  style="max-width="100%;" class="img-thumbnailE" width="100" height="35" /><input type="hidden" name="hidden_user_image2" value="'.$row["image2"].'" />';
		}
		else
		{
			$output['user_image2'] = '<input type="hidden" name="hidden_user_image2" value="" />';
		}
	}
	echo json_encode($output);
}