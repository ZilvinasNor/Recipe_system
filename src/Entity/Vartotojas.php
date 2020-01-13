<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vartotojas
 *
 * @ORM\Table(name="vartotojas")
 * @ORM\Entity
 */
class Vartotojas
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
     * @ORM\Column(name="vardas", type="string", length=45, nullable=false)
     */
    private $vardas;

    /**
     * @var string
     *
     * @ORM\Column(name="slaptazodis", type="string", length=45, nullable=false)
     */
    private $slaptazodis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sukurimo_data", type="date", nullable=false)
     */
    private $sukurimoData;


}
