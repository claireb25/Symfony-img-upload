<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImageRepository")
 */
class Image
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * 
     * @Assert\NotBlank(message="Attention ce fichier doit être une image ou un PDF.")
     * @Assert\File(mimeTypes={ "application/pdf", "image/jpeg", "image/png", "image/gif" })
     */
    private $imagefield;

    public function getId()
    {
        return $this->id;
    }

    public function getImagefield()
    {
        return $this->imagefield;
    }

    public function setImagefield(string $imagefield)
    {
        $this->imagefield = $imagefield;

        return $this;
    }
}
