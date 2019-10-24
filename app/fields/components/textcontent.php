<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$textcontent= new FieldsBuilder('textcontent');

$textcontent
	->addTextarea('title', ['title'=>'Tytuł', 'new_lines'=>'br', 'rows'=>2])
	->addWysiwyg('content', ['title'=>'Content'])
    ;
return $textcontent;
