<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kategorija
 *
 * @ORM\Table(name="kategorija")
 * @ORM\Entity
 */
class Kategorija
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pavadinimas", type="string", length=45, nullable=false)
     */
    private $pavadinimas;


}
