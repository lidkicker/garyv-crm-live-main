<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\DBAL\Types\FluesizeType;
use App\Repository\FluesizeRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Fresh\DoctrineEnumBundle\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Uid\Uuid;
use Symfony\Bridge\Doctrine\IdGenerator\UuidV4Generator;

/**
 * Fluesize
 *
 * @ApiResource
 * @ORM\Table(name="fluesize", indexes={@ORM\Index(name="idx_e309cffd9395c3f3", columns={"customer_id"})})
 * @ORM\Entity(repositoryClass=FluesizeRepository::class)
 */
class Fluesize
{
    /**
     * @var \Symfony\Component\Uid\Uuid
     *
     * @ORM\Column(name="id", type="uuid", nullable=false, options={"default"="uuid_generate_v4()"})
     * @ORM\Id
     * @ORM\Column(type="uuid", unique=true)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class=UuidV4Generator::class)
     */
    private $id = 'uuid_generate_v4()';

    /**
     * @var FluesizeType
     *
     * @ORM\Column(name="fluesize", type="FluesizeType", nullable=false)
     * @DoctrineAssert\Enum(entity="App\DBAL\Types\FluesizeType")
     */
    private $fluesize;

    /**
     * @var \Customer
     *
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $customer;

    public function getId()
    {
        return $this->id;
    }

    public function getFluesize()
    {
        return $this->fluesize;
    }

    public function setFluesize($fluesize): self
    {
        $this->fluesize = $fluesize;

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
