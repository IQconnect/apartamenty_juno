<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$titleicon = new FieldsBuilder('titleicon');

$titleicon
    ->addTextArea('title', ['label'=>'Tytuł','new_lines'=>'br', 'rows'=>2])
    ->addTrueFalse('special', ['label'=>'Po prawej stronie?'])
	->addRepeater('icons', ['title'=>'Ikonki'])
        ->addImage('icon', ['title'=>'Ikonka'])
        ->addTextarea('text', ['title'=>'Tekst', 'new_lines'=>'br'])
    ;
return $titleicon;
