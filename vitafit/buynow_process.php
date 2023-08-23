<?php
	    if(isset($_POST['submit'])){
	        $name = $_POST['txtName'];
	        $phone = $_POST['txtPhone'];

	        $postdata = http_build_query(
			    array(
			        'firstname' => $name,
			        'phone' => $phone
			    )
			);
			$opts = array('http' =>
			    array(
			        'method' => 'POST',
			        'header' => 'Content-type: application/x-www-form-urlencoded',
			        'content' => $postdata
			    )
			);
			$context = stream_context_create($opts);
			$pathApi = 'https://tracking.affscalecpa.com/api/v2/affiliate/leads?api-key=220438f60bfa3728e2ba82cdca62706e3ea42015&goal_id=222';
			$result = file_get_contents($pathApi, false, $context);

			$link = 'thanks.html?name='.$name.'&phone='.$phone;
			header("Location: $link");
	    }
	?>