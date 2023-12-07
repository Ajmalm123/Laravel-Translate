<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\TranslateTextHelper;

class Translatecontroller extends Controller
{
    public function __invoke()
    {
        // Set the source and target languages
        TranslateTextHelper::setSource('en')->setTarget('ja');

        // Translate the text
        $translatedText = TranslateTextHelper::translate('Hello, world!');

        // Output the translated text
        echo $translatedText;
    }
}
