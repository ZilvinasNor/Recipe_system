<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Receptas
 *
 * @ORM\Table(name="receptas", indexes={@ORM\Index(name="vartotojas_idx", columns={"vartotojas"}), @ORM\Index(name="kategorija_idx", columns={"kategorija"})})
 * @ORM\Entity
 */
class Receptas
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
     * @ORM\Column(name="instrukcijos", type="text", length=65535, nullable=false)
     */
    private $instrukcijos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data;

    /**
     * @var \Kategorija
     *
     * @ORM\ManyToOne(targetEntity="Kategorija")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="kategorija", referencedColumnName="id")
     * })
     */
    private $kategorija;

    /**
     * @var \Vartotojas
     *
     * @ORM\ManyToOne(targetEntity="Vartotojas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vartotojas", referencedColumnName="id")
     * })
     */
    private $vartotojas;

    public function getId()
    {
        return $this->id;
    }

    public function getPavadinimas()
    {
        return $this->pavadinimas;
    }

    public function getInstrukcijos()
    {
        return $this->instrukcijos;
    }

    public function  getData()
    {
        return $this->data->format('Y-m-d');
    }
}
