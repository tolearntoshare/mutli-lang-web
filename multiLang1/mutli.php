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
//$locale = 'fr_CH';

// this name will be use as prefix to ar_JO.mo file
// he will add XXXXXXXXXXXXXXXXXXXXXXXXXXXX_ar_JO
$domain = 'messages';
$codeset = 'UTF-8';
$directory = __DIR__ . '/locale';

// Activate the locale settings
putenv('LC_ALL=' . $locale);
setlocale(LC_ALL, $locale);

// Debugging output 
echo "<br>";echo "<br>";
$file = sprintf('%s/%s/LC_MESSAGES/%s_%s.mo', $directory, $locale, $domain, $locale);
echo $file . "\n";
echo "<br>";echo "<br>";
// Generate new text domain
$textDomain = sprintf('%s_%s', $domain, $locale);

// Set base directory for all locales
bindtextdomain($textDomain, $directory);

// Set domain codeset (optional)
bind_textdomain_codeset($textDomain, $codeset);

// File: ./locale/de_DE/LC_MESSAGES/messages_de_DE.mo
textdomain($textDomain);

// test translations
echo _("HIIII");
echo "<br>";
echo _("Do it once man, this is nice");
