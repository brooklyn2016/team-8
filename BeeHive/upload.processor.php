<?php
	require_once("includes/config.php");
	$fileExistsFlag = 0; 
	$fileName = $_FILES['Filename']['name'];
	$fileExt = array(".gif", ".mp4", ".wav", ".mov");
	$fileTypeFlag = 0;
	
	foreach ($fileExt as $ext) {
		if (strpos($fileName, $ext) !== false) {
			$fileTypeFlag = 1;
		}
	}

	/* 
	*	Checking whether the file already exists in the destination folder 
	*/
	$query = "SELECT name FROM Videos WHERE name='$fileName'";	
	$result = $link->query($query) or die("Error : ".mysqli_error($link));
	while($row = mysqli_fetch_array($result)) {
		if($row['filename'] == $fileName) {
			$fileExistsFlag = 1;
		}	
	}
		
	/*
	* If file is not present in the destination folder
	*/
	if($fileExistsFlag == 0) {
		// Getting timestamp
		$t = microtime(true) * 1000;;
	
		$target = "/var/www/html/media/";	
		$fileTarget = $target.$fileName;	
		$tempFileName = $_FILES["Filename"]["tmp_name"];
		$fileDescription = $_POST['Description'];	
		$result = move_uploaded_file($tempFileName,$fileTarget);
	
		/*
		*	If file was successfully uploaded in the destination folder
		*/
		if ($fileExistsFlag !== 0) {
			echo "The file type provided is not a valid video file";
		} else {
		if($result) { 
			echo "Your file <html><b><i>".$fileName."</i></b></html> has been successfully uploaded";	
			$query = "INSERT INTO Videos(name,file,email,vid_length,explicit,upload_time,description) VALUES ('$fileName','$fileTarget','test_user@example.com','000001','False',$t,'$fileDescription')";
			$link->query($query) or die("Error : ".mysqli_error($link));	
		} else {	
			echo "Sorry !!! There was an error in uploading your file";	
		}
		mysqli_close($link);
		} 		
	}	
	/*
	* If file is already present in the destination folder
	*/
	else {
		echo "File <html><b><i>".$fileName."</i></b></html> already exists in your folder. Please rename the file and try again.";
		mysqli_close($link);
	}	
?>
