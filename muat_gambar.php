<?php
$directory = 'foto';
$images = array();

if (is_dir($directory)) {
    if ($dir = opendir($directory)) {
        while (($file = readdir($dir)) !== false) {
            if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['JPG','jpg', 'jpeg', 'png'])) {
                $images[] = $file;
            }
        }
        closedir($dir);
    }
}


header('Content-Type: application/json');
echo json_encode($images);
?>
