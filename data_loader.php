<?php 
	# data_loader.php
	
	if(isset($_POST['subclass_id']))
	{
		$classid='';
		if($_POST['subclass_id'] !='')
		{
			$classid=trim($_POST['subclass_id']);
			if($classid=="diploma")
			{
				echo "<option value='computer'>Computer</option>";
				echo "<option value='civil'>Civil</option>";
				
			}
			else if($classid=="be")
			{
				echo "<option value='computer'>Computer</option>";
				echo "<option value='civil'>Civil</option>";
				echo "<option value='arch'>Architech</option>";
				
			}else if($classid=="me")
			{
				echo "<option value='msc'>Construction</option>";
				
			}else{
				echo "<option value='0'>--Select--</option>";
			}
			
			
		}

	}
?>