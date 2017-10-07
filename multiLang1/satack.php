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
    $language = 'nl_NL';
}

echo ""
        . "<a href='?lang=en_US'>EN</a> |"
        . "<a href='?lang=ar_JO'>AR</a> |"
        . "<a href='?lang=nl_NL'>NL</a> |";


$locale = $language;
$domain = 'messages';
$codeset = 'UTF-8';
$directory = __DIR__ . '/locale';

putenv('LC_ALL=' . $locale);
setlocale(LC_ALL, $locale);

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
echo _("alqudah");
echo gettext("Moon");
