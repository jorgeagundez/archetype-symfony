<?php

namespace Tests\Runroom\EntitiesBundle\Unit;

use PHPUnit\Framework\TestCase;
use Tests\Runroom\EntitiesBundle\MotherObject\GalleryImageMotherObject;

class GalleryImageTest extends TestCase
{
    /**
     * @test
     */
    public function itGetsProperties()
    {
        $gallery_image = GalleryImageMotherObject::createFilled();

        $this->assertEquals(GalleryImageMotherObject::ID, $gallery_image->getId());
        $this->assertEquals(GalleryImageMotherObject::IMAGE, $gallery_image->getImage());
        $this->assertEquals(GalleryImageMotherObject::GALLERY, $gallery_image->getGallery());
        $this->assertEquals(GalleryImageMotherObject::POSITION, $gallery_image->getPosition());
    }
}
