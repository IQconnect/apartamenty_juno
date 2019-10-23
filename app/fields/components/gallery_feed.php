<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$galleryFeed = new FieldsBuilder('gallery_feed');

$galleryFeed
    ->addGallery('gallery_feed', ['title'=>'Galeria', 'min'=>6, 'max'=>6])
    ;
return $galleryFeed;