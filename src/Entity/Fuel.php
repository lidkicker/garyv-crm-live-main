<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\DBAL\Types\FuelType;
use App\Repository\FuelRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Fresh\DoctrineEnumBundle\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Uid\Uuid;
use Symfony\Bridge\Doctrine\IdGenerator\UuidV4Generator;

/**
 * Fuel
 *
 * @ApiResource()
 * @ORM\Table(name="fuel", indexes={@ORM\Index(name="idx_31bd6fe99395c3f3", columns={"customer_id"})})
 * @ORM\Entity(repositoryClass=FuelRepository::class)
 */
class Fuel
{
    /**
     * @var \Symfony\Component\Uid\Uuid
     *
     * @ORM\Column(name="id", type="uuid", nullable=false, options={"default"="uuid_generate_v4()"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class=UuidV4Generator::class)
     */
    private $id;

    /**
     * @var FuelType
     *
     * @ORM\Column(name="fuel", type="FuelType", nullable=false)
     * @DoctrineAssert\Enum(entity="App\DBAL\Types\FuelType")
     */
    private $fuel;

    /**
     * @var \Customer
     *
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="fuels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $customer;

    public function getId()
    {
        return $this->id;
    }

    public function getFuel()
    {
        return $this->fuel;
    }

    public function setFuel($fuel): self
    {
        $this->fuel = $fuel;

        return $this;
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function setCustomer(?Customer $customer): self
    {
        $this->customer = $customer;

        return $this;
    }


}
