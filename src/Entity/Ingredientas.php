<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredientas
 *
 * @ORM\Table(name="ingredientas", indexes={@ORM\Index(name="receptas_idx", columns={"receptas"})})
 * @ORM\Entity
 */
class Ingredientas
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
     * @var string
     *
     * @ORM\Column(name="kiekis", type="text", length=255, nullable=false)
     */
    private $kiekis;

    /**
     * @var \Receptas
     *
     * @ORM\ManyToOne(targetEntity="Receptas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="receptas", referencedColumnName="id")
     * })
     */
    private $receptas;


}
