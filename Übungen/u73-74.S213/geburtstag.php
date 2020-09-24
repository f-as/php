<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="eingabe">
    <textarea name="textarea"></textarea>
    <input type="submit" name="sub" value="absenden">
</form>
<?php
if(isset($_POST['sub'])) {

    // u71
    $text = strtoupper($_POST['eingabe']);
    echo $text;

    // u72
    $text = nl2br($_POST['textarea']);
    echo '<p>'. $text .'</p>';
}

// u75
function formatiereErstenBuchstabenJedesWortesGross($data = 'das ist ein toller satz.') {
    $words = explode(' ', $data);
    $length = count($words);
    for($i = 0; $i < $length; $i++) $words[$i] = ucfirst($words[$i]);
    $text = implode(' ', $words);

    return $text;
}

echo formatiereErstenBuchstabenJedesWortesGross();

// u76
function maskiereUmlaute($data = 'Über den Wolken bürsten rosä Schwäne ihre Körper') {
    $umlaute = ['ä' => 'a', 'ö' => 'o', 'ü' => 'u', 'Ü' => 'U', 'Ö' => 'O', 'Ä' => 'A'];
    $text = $data;

    foreach($umlaute as $k => $v) {
        $replace = '&'. $v . 'uml;';
        $text = str_replace($k, $replace, $text);
    }

    return $text;
}

echo maskiereUmlaute();

?>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="day">
    <input type="text" name="month">
    <input type="text" name="year">
    <input type="submit" name="birthSub" value="los!">
</form>
<?php

if(isset($_POST['birthSub'])) {

    $month = $_POST['month'];
    $day = $_POST['day'];
    $year = $_POST['year'];

    $timestamp = mktime(0,0,0,$month,$day,$year);
    $result = sprintf('Timestamp zum Zeitpunkt des Geburtstages: %d', $timestamp);
    echo $result;

    $age = time() - $timestamp;
    $minutes = $age / 60;
    $hours = $minutes / 60;
    $days = $hours / 24;
    $years = $days / 365;

    echo '<hr>';
    $result = sprintf('Sie sind momentan %d Jahre alt', floor($years));
    echo $result;

}
