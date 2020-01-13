<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reitingas
 *
 * @ORM\Table(name="reitingas", indexes={@ORM\Index(name="vartotojas_reit_idx", columns={"vartotojas"}), @ORM\Index(name="receptas_idx", columns={"receptas"})})
 * @ORM\Entity
 */
class Reitingas
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
     * @var int
     *
     * @ORM\Column(name="ivertinimas", type="integer", nullable=false)
     */
    private $ivertinimas = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data;

    /**
     * @var \Receptas
     *
     * @ORM\ManyToOne(targetEntity="Receptas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="receptas", referencedColumnName="id")
     * })
     */
    private $receptas;

    /**
     * @var \Vartotojas
     *
     * @ORM\ManyToOne(targetEntity="Vartotojas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vartotojas", referencedColumnName="id")
     * })
     */
    private $vartotojas;


}
