<?php
namespace App;
use StoutLogic\AcfBuilder\FieldsBuilder;
$diary = new FieldsBuilder('diary');
$diary
    ->addText('title', ['title'=>'Tytuł'])
    ->addRepeater('diary', ['label'=>'diary'])
        ->addTrueFalse('add_text')
        ->addText('subtitle', ['title'=>'Tekst'])
        ->addText('subtitle2', ['title'=>'Subtext'])
            ->conditional('add_text', '==','0')
        ->addTextarea('text', ['title'=>'Tekst'])
            ->conditional('add_text', '==','1')
        ->addText('year', ['title'=>'Data'])
    ;
return $diary;
