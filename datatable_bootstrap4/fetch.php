<?php
	include('db.php');
	include('function.php');
	$query = '';
	$output = array();
	$query .= "SELECT * FROM users ";
	if(isset($_POST["search"]["value"]))
	{
		$query .= 'WHERE first_name LIKE "%'.$_POST["search"]["value"].'%" ';
		$query .= 'OR last_name LIKE "%'.$_POST["search"]["value"].'%" ';
	}
	if(isset($_POST["order"]))
	{
		$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
	}
	else
	{
		$query .= 'ORDER BY id DESC ';
	}
	if($_POST["length"] != -1)
	{
		$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
	}
	$statement = $connection->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$data = array();
	$filtered_rows = $statement->rowCount();
	foreach($result as $row)
	{
		$image = '';
		if($row["image"] != '')
		
		{
			$image = '  <img src="upload/'.$row["image"].'" class="img-thumbnail" />';
			
			
		}
		else 
		{
			$image = '';
			
		}
		$image2 = '';
		if($row["image2"] != '')
		
		{
		$image2 = ' <img src="upload/'.$row["image2"].'" class="img-thumbnail" />

   ';
		}
		else
		{
			$image2 = '';

		}
		$sub_array = array();
		$sub_array[] = $image;
		$sub_array[] = $image2;
		$sub_array[] = $row["first_name"];
		$sub_array[] = $row["last_name"];
		$sub_array[] = '<a href="#" class="btn btn-warning btn-lg update" name ="Edit" id="'.$row["id"].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>';
		$sub_array[] = '<a href="#" type="button" class="btn btn-danger btn-lg delete"  name="Delete" id="'.$row["id"].'"><i class="fa fa-trash"></i></a>';
		$data[] = $sub_array;
	}
	$output = array(
		"draw"				=>	intval($_POST["draw"]),
		"recordsTotal"		=> 	$filtered_rows,
		"recordsFiltered"	=>	get_total_all_records(),
		"data"				=>	$data
	);
	echo json_encode($output);
	

	 