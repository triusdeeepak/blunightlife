<?php include 'header.php'; ?>
<?php
	$errors = array();
	if( isset($_POST['submit_city']) ){
		$city = validate_post('city');
		if( empty($city) ) $errors[] = 'Please provide your city name.';
		if( count($errors == 0) ){
			$added_city = adding_city( $city );
			//var_dump($added_city); exit;
			if( $added_city !== true ){
				$errors[] = $added_city;
			}else{
				echo '<div style="color:green">'.$city.' has been added as a city<br>.</div>';
			}
		}
	}

	if( count($errors) > 0 ){
		echo '<div style="color:red">';
		foreach ($errors as $key => $error) {
			echo $error.'<br>';
		}
		echo '</div>';
	}
?>
<div>
	<h1>Add City</h1>
	<form method="post" action="">
		<label for="city">City</label><br>
		<input type="text" name="city" id="city" placeholder="Enter a city name." required/>
		<input type="submit" name="submit_city" value="Add City"/>
	</form>
</div>
<br><br>
<?php include 'footer.php'; ?>