<!-- testcombobox.php -->

<script src="jquery-1.12.0.min.js"></script>
  
  
<div> 
Education
<select name="edu" id="edu" required>
	
	<option value='0'>-- Select--</option>
	<?php 
		#display data here from database
		echo "<option value='diploma'>Diploma</option>";
		echo "<option value='be'>Bachelors</option>";
		echo "<option value='me'>Masters</option>";
											 
	?>
</select>
</div>
<div>
<script>
	$(document).ready(function(){
		$('#edu').change(function(){
			var classer = $(this).val();
				$.ajax({
					type:"POST",
						url:"data_loader.php",
						data:'subclass_id='+classer,
						success:function(result){
						$('#cs').html(result);
					}
				});
			});
		});
																		
</script>	
<br/>
Program										
<select  name="classsection" id="cs" required>
	
	<option value="0">-- Select--</option>
	 <?php 
			#display initial data here from database or it is optional
			echo "<option value='computer'>Computer</option>";
			echo "<option value='be'>Civil</option>";
			echo "<option value='arch'>Architech</option>";
												 
		?>
</select>