<?php
	
	$con=new mysqli('localhost','root','','sistev');
     
	 $data=$con->query('select idsigma as id, ds_evento as title,lugarevento,finicio as start,ffin as end from mevento');
	 
	 //var_dump($data);
	
	while($row=$data->fetch_array(MYSQLI_ASSOC)){	  
		 $datos= array();
		 $datos['id']=$row['id'];
		 $datos['title']=$row['title'].'-'.$row['lugarevento'];
		 $datos['start']=$row['start'];
		 $datos['end']=$row['end'];
		 $datos['allDay']=true;
		 $sera[]=$datos;
	}
	
	echo json_encode($sera);	
	
	/*echo json_encode(array(
	
		array(
			'id' => 111,
			'title' => "Event1 sobre erererer ererer erere rerer",
			'start' => "$year-$month-10",
			'url' => "http://yahoo.com/"			
		),
		array(
			'id' => 111,
			'title' => "Event1 sobre erererer ererer erere rerer",
			'start' => "$year-$month-10",
			'url' => "http://yahoo.com/"			
		),
		array(
			'id' => 111,
			'title' => "Event1 sobre erererer ererer erere rerer",
			'start' => "$year-$month-10",
			'url' => "http://yahoo.com/"			
		),
		
		array(
			'id' => 222,
			'title' => "Event2",
			'start' => "$year-$month-20",
			'end' => "$year-$month-22",
			'url' => "http://yahoo.com/"
		)
	
	));*/

?>
