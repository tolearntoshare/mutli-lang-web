<?php

if (!function_exists("gettext"))
{
    echo "gettext is not installed\n";
}
else
{
    echo "gettext is supported\n";


echo _("hi this to be translated ");
}



if (isset($_GET['lang'])) {
    $language = $_GET['lang'];
} else {
    $language = 'ar_JO';
}
echo ""
        . "<a href='?lang=en_US'>EN</a> |"
        . "<a href='?lang=ar_JO'>AR</a> |"
        . "<a href='?lang=nl_NL'>NL</a> |";


putenv("LANG=$language"); 
setlocale(LC_ALL, $language);

// Set the text domain as 'messages'
$domain = 'messages';
bindtextdomain($domain, "locale"); 
bind_textdomain_codeset($domain, 'UTF-8');

textdomain($domain);




/*
$language = 'en_US';
putenv("LANG=$language"); 
setlocale(LC_ALL, $language);


$domain = 'aymantransaltion';

// Specify location of translation tables
bindtextdomain($domain, "./locale");

// Choose domain
bind_textdomain_codeset($domain, 'UTF-8');
textdomain($domain);

// Translation is looking for in ./locale/de_DE/LC_MESSAGES/myPHPApp.mo now

*/
echo _("HELLO_WORLD");
echo _("hi this to be translated ");