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

echo ""
        . "<a href='?lang=en_US'>EN</a> |"
        . "<a href='?lang=ar_JO'>AR</a> |"
        . "<a href='?lang=nl_NL'>NL</a> |";


$language = 'en_US';
putenv("LANG=$language"); 
setlocale(LC_ALL, $language);

// name of mofile 
$domain = 'ar_JO';


// Specify location of translation tables
bindtextdomain($domain, './locales/nocache');


// Specify location of translation tables
bindtextdomain($domain, "./locale");

// Choose domain
bind_textdomain_codeset($domain, 'UTF-8');
textdomain($domain);

// Translation is looking for in ./locale/de_DE/LC_MESSAGES/myPHPApp.mo now


echo _("HELLO_WORLD");
echo _("hi this to be translated ");