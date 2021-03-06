<?php

namespace App\Application\Sonata\MediaBundle\Document;

use Sonata\MediaBundle\Document\BaseGallery as BaseGallery;

/**
 * This file has been generated by the SonataEasyExtendsBundle.
 *
 * @see https://sonata-project.org/easy-extends
 *
 * References:
 * @see http://www.doctrine-project.org/docs/mongodb_odm/1.0/en/reference/working-with-objects.html
 */
class Gallery extends BaseGallery
{
    /**
     * @var int
     */
    protected $id;

    /**
     * Get id.
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }
}
