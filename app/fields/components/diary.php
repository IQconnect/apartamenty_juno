<?php
namespace App;
use StoutLogic\AcfBuilder\FieldsBuilder;
$diary = new FieldsBuilder('diary');
$diary
    ->addText('title', ['title'=>'Tytuł'])
    ->addRepeater('diary', ['label'=>'diary'])
        ->addGroup('content')
            ->addText('year', ['label'=>'Data'])
            ->addText('subtitle', ['label'=>'Tytuł'])
            ->addTextarea('text', ['label'=>'Tekst'])
        ->endGroup()
        ->addGallery('gallery')
    ;
return $diary;
