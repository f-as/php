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
