<?php
session_start();
$n = isset($_SESSION['n']) ? $_SESSION['n'] : 0;
$_SESSION['n']++;

$path = './i/';
$filename = substr(sha1( session_id() . $n ), 0, 10);
for ($i=0; $i<4; $i++) {
    $path .= substr($filename, 0, 1) . '/'; 
    $filename = substr($filename, 1);
    if (!file_exists($path)) {
        mkdir($path);
    }
}

$f = 0.05;
//$tmp = explode("\n", $_POST['data']);
$tmp = preg_replace('/\s\s+/', " ",str_replace("\n", " ", $_POST['data']));
if (!preg_match('/,/', $tmp)) {
    $lines = explode(" ", $tmp);
} else {
    $lines = explode(",", $tmp);
}
$linesPositive = array_map(function($elem) { return abs($elem); }, $lines);
$im = imagecreate( ceil(array_sum($linesPositive)*$f)+10, 150 );
$white = imagecolorallocate($im, 255,255,255);
$black = imagecolorallocate($im, 0,0,0);
$grey = imagecolorallocate($im, 230, 230, 240);
$x=45; $y=0;
imagerectangle($im, 0,0,imagesx($im)-1, imagesy($im)-1, $black);

foreach ($lines as $l) {

    imageline($im, $x*$f, 1, $x*$f, imagesy($im)-2, $grey);
    imageline($im, $lastX*$f, $y*50+25, $x*$f, $y*50+25, $black);
    imageline($im, $x*$f, $y*50+25, $x*$f, !$y*50+25, $black);

    $out = '';
    for ($i=0; $i<6-strlen(abs($l)); $i++) {
        $out .= ' ';
    }
    $out .= $l;
    imagestringup($im, 2, $x*$f+2, 140, $out, $black);

    $lastX = $x; 
    $lastY = $y;
    $x += abs($l);
    $y = !$y;

}
imagepng($im, $path . $filename . '.png');
header('Content-type: text/json');
echo json_encode( array(
    'href' => $path . $filename . '.png',
    'name' => $filename,
    ));