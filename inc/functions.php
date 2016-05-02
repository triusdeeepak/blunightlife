<?php 
ini_set('display_errors', 1);

function connect() {
	include("config.php");
	$db = new mysqli($config['dbHost'], $config['dbUser'], $config['dbPassword'],$config['dbName']);

	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	return $db;
}

function getGuest($guest_id) {
	$db = connect();
	if($guest = $db->query("SELECT * from Guest where Guest_ID=".$guest_id.""))
	{	
		$guest=$guest->fetch_assoc();
		return $guest;
	}
	return null;
}

function getVenue($venue_id) {
	
}

function getAdditionalGuests($guest_id) {
	$db = connect();
	$additionalGuest = array();
	$sql = "SELECT * FROM AdditionalGuest WHERE AdditionalGuest_GuestID = " . $guest_id;
	if($result = $db->query($sql)) {
		while($row = $result->fetch_assoc()) {
			array_push($additionalGuest, $row);
		}
	}
	return $additionalGuest;
}

function search($keyword) {
	$db = connect();
	$venues = array();
	$sql = "SELECT v.* FROM Venue v INNER JOIN City c on v.Venue_CityID = City_ID WHERE c.City_Name LIKE '%$keyword%' OR v.Venue_Name LIKE '%$keyword%' OR v.Venue_Address LIKE '%$keyword%'";
	if($result = $db->query($sql)) {
		while($row = $result->fetch_assoc()) {
			array_push($venues, $row);
		}
	}
	return $venues;
}

function sendmail() {
	$subject = "Blu Nightlife";
	$from_mail = "valencia.dominic@gmail.com";
	$from_name = "Blue Nightlife";
	$mailto = " awheeldon@gmail.com";
	$message = "Test mail";
	
	$header = "From: ".$from_name." <".$from_mail.">\r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= $message."\r\n\r\n";
	
	if (mail($mailto, $subject, "", $header)) {
	  echo "mail sent";
	} else {
	  echo "mail failed";
	}
}

/** Function for redirection. */
function redirect_user($page){
	header( 'location:'.$page );
	exit;
}

/** Function for get site url. */
function getSiteUrl(){
	if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    $uri = explode('/',$_SERVER['REQUEST_URI']);
    
    return $protocol . "://" . $_SERVER['HTTP_HOST'] . '/'. $uri[1];
}

/** Function for validating post values */
function validate_post($post_data){
	$post_data = isset( $_POST[$post_data] ) ? $_POST[$post_data] : '';
	$secure_data = stripslashes( $post_data );
	$secure_data = htmlspecialchars($secure_data);
	return $secure_data;
}

/** Function for filtering input data by sql queries into database. */
function filter_data($data){
	$db = connect();
	$filtered_data = mysqli_real_escape_string( $db,$data );
	return $filtered_data;
}

/** Adding city into database. */
function adding_city( $city ){
	$city = filter_data($city);
	$db = connect();
	
	if( $city_found = $db->query("SELECT * from cities where name = '".$city."' ") )
	{	
		if($city_found->num_rows){
			return 'Provided city already exists.';
		}
	}
	if( $inserted = $db->query( "INSERT into cities ( name ) VALUES ( '".$city."' )" ) )
	{	
		return true;
	}
	return mysqli_error($db);
}


?>