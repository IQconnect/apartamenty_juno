<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$textcontent= new FieldsBuilder('textcontent');

$textcontent
	->addText('title', ['title'=>'Tytuł'])
	->addWysiwyg('content', ['title'=>'Content'])
    ;
return $textcontent;
