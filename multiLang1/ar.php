<?php

if (!function_exists("gettext"))
{
    echo "gettext is not installed\n";
}
else
{
    echo "gettext is supported\n";




echo _("<br> hi this to be translated 2 ");
}



putenv('LC_ALL=ar_JO');
setlocale(LC_ALL, 'ar_JO');



// Specify location of translation tables
bindtextdomain('enFILEAYMAN', './locale/nocache');

// Specify location of translation tables
bindtextdomain("enFILEAYMAN", "./locale");

// Choose domain
textdomain("enFILEAYMAN");

// Translation is looking for in ./locale/de_DE/LC_MESSAGES/myPHPApp.mo now


echo _("<br>HELLO_WORLD");
echo _("<br>hi this to be translated 2222 ");