<?php

if (!function_exists("gettext")) {
    echo "gettext is not installed \n";
} else {
    echo ("gettext is supported ");
    echo "<br>";
}

if (isset($_GET['lang'])) {
    $selectlang = $_GET['lang'];
} else {
    $selectlang = 'nl_NL';
}
echo ""
        . "<a href='?lang=en_US'>EN</a> |"
        . "<a href='?lang=ar_JO'>AR</a> |"
        . "<a href='?lang=nl_NL'>NL</a> |";


//putenv('LANGUAGE=en_US');
$language = $selectlang;
putenv("LANGUAGE=" . $language);
setlocale(LC_ALL, $language);

$domain = 'messages';
setlocale(LC_ALL, 'en_US.utf8');


if( ENV != 'live' ){
    // reset caching nocache is a simlink to "."
    bindtextdomain($domain, dirname(__FILE__) . '/../locale/nocache');
}

bindtextdomain($domain, dirname(__FILE__) . '/../locale');
bind_textdomain_codeset($domain, 'UTF-8');
textdomain($domain);



// test translations
echo _("HIIII");
echo "<br>";
echo _("Do it once man, this is nice");
