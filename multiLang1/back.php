<!DOCTYPE html>
<?php

if (!function_exists("gettext")) {
    echo "gettext is not installed \n";
} else {
    echo ("gettext is supported ");
    echo "<br>";
}

if (isset($_GET['lang'])) {
    $language = $_GET['lang'];
} else {
    $language = 'en_US';
}
echo "BACK PAGE WITH msgx OP file "
        . "<a href='?lang=en_US'>EN</a> |"
        
        . "<a href='?lang=ar_LB'>LB</a> |";


$locale = $language;
$domain = 'msgx';
$codeset = 'UTF-8';
$directory = __DIR__ . '/locale';

putenv('LC_ALL=' . $locale);
setlocale(LC_ALL, $locale);
putenv('LANGUAGE=en_US');

// Debugging output 
echo "<br>";echo "<br>";
$file = sprintf('%s/%s/LC_MESSAGES/%s_%s.mo', $directory, $locale, $domain, $locale);
echo $file . "\n";
echo "<br>";echo "<br>";

$textDomain = sprintf('%s_%s', $domain, $locale);
bindtextdomain($textDomain, $directory);
bind_textdomain_codeset($textDomain, $codeset);
textdomain($textDomain);

// test translations
echo _("ayman");
echo "<br>";
echo _("Xayman");
echo "<br>";
echo _("Xalqudah");
echo "<br>";
echo _("XALLAH AKBAR");