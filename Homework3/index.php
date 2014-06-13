<!DOCTYPE html>

<html>
	<head>
		<title> Indexer Result</title>
		<meta charset="uft-8"/>
	</head>
	<body>
	<?php

		$typedPath = $_POST["textfield"];

		if(isset($_POST["filechoose"])){
			$typedPath = $_POST["filechoose"];
		}
		else{
			$typedPath = $_POST["textfield"];
			if($typedPath == ""){

				echo "Empty text field";
				return;
			}
			// check which one is the separator and change if necessary.
			if(DIRECTORY_SEPARATOR == "\\"){
					echo "Separador \\"."<br/>";
					$typedPath = str_replace('/',DIRECTORY_SEPARATOR, $typedPath);
			}
			else{
				echo "Separador / "."<br/>";
				$typedPath = str_replace('\\',DIRECTORY_SEPARATOR,$typedPath);
			}
			chdir($typedPath); // set de first directory.
		}

		if(is_dir($typedPath)){ // is a directory
			traverseDirectory($typedPath);
		}
		else if(is_file($typedPath)){
			if(checkFileType($typedPath)){
				Indexer($typedPath); // call to index the file.
			}
			else{
				echo "cannot index a ".pathinfo($path, PATHINFO_EXTENSION)." file, just html and htm files";
			}
		}
		else{ //if its is not a file or a directory. who know that user can type.
			echo "The path : ".$typedPath." is not a valid path";
		}

	?>
	</body>
</html>

<!-- Functions in PHP -->

<?php

	function checkFileType($path){
		$ext = pathinfo($path, PATHINFO_EXTENSION);

		if($ext === "html" || $ext === "htm"){
			return TRUE;
		}
		else return FALSE;
	}

	function loadFile($filename){
		$mode="r";
		$file = "";
		if ($fp=fopen($filename,$mode)) {
			//echo "File is opened<br><br>";
			while ($str = fgets($fp, 1000)) {
				//echo $str,"<br>";
				$file .= $str;
			}
		}
		else 
			echo "Could not open file";
		if (fclose($fp)) 
			//echo "<br>File closed";

		return $file;
	}

	function traverseDirectory($root){
		echo $root."<br/>";
		//chdir($root);
		$files = scandir($root);

		for($i = 0; $i < sizeof($files); $i++){
			$subdir = $root.DIRECTORY_SEPARATOR.$files[$i];
			if(is_file($subdir)){ // is a file
				if(checkFileType($subdir)){
					// Call indexer
					Indexer($subdir);
					//echo "file : ".$subdir."<br/>";
				}
			}
			else{ // is a folder
				if($files[$i] != "." && $files[$i] != ".."){ // avoid infinite recursion
					traverseDirectory($subdir);
				}
				//	chdir($root);
			}
		}
	} 

	// This is the same program as the first part.
	function Indexer($filepath){

		$file = loadFile($filepath);

		$noTags = strip_tags($file);
		//$noTags = str_replace("\"", "", $noTags);
		$noTags = str_replace("'s", '', $noTags);
		$noTags = preg_replace('/[,.;:\"!\?\(\)°]/', ' ', $noTags);
		//$noTags = preg_replace('/(([^a-zà-ú0-9]|&[aeiou]acute;)-?([^a-zà-ú0-9]|&[aeiou]acute;))+/i',' ',$noTags);
		$noTags = preg_replace('/[^a-zà-úÀ-Ú0-9?\s]-?[^a-zà-ú0-9?\s]+/i',' ',$noTags);

		$arrayWords = array();

		$str = strtok($noTags," \n\t");

		while($str !== FALSE){
			$str = strtolower($str);
			if(array_key_exists($str, $arrayWords)) $arrayWords[$str]++;
			else $arrayWords[$str] = 1;
			$str = strtok(" \n\t");
		}

		ksort($arrayWords); //sort array

		$arrayKeys = array_keys($arrayWords);
		echo "<h2> File: ".pathinfo($filepath,PATHINFO_FILENAME)."</h2>";
		echo "<h3> Words found </h3>";
		echo "<ul>";
		for($i = 0; $i < sizeof($arrayKeys); $i++){
			if(strlen($arrayKeys[$i]) > 1)
				echo "<li>".$arrayKeys[$i]." : ".$arrayWords[$arrayKeys[$i]]."</li>";
		}
		echo "</ul>";

		$metaTags = get_meta_tags($filepath);
		echo "<h3> Meta Information </h3>";

		foreach($metaTags as $key=>$element){
			echo $key." : ".$element."<br/>";
		}

	}
?>