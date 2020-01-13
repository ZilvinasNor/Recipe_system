<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Puslapis
 *
 * @ORM\Table(name="puslapis")
 * @ORM\Entity
 */
class Puslapis
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
     * @ORM\Column(name="pavadinimas", type="string", length=45, nullable=false, options={"fixed"=true})
     */
    private $pavadinimas;

    /**
     * @var string|null
     *
     * @ORM\Column(name="turinys", type="text", length=65535, nullable=true)
     */
    private $turinys;


}
