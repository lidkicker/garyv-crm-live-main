<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\DBAL\Types\LinerType;
use App\Repository\LinerRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Fresh\DoctrineEnumBundle\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Uid\Uuid;
use Symfony\Bridge\Doctrine\IdGenerator\UuidV4Generator;

/**
 * Liner
 *
 * @ApiResource()
 * @ORM\Table(name="liner", indexes={@ORM\Index(name="idx_3806bc009395c3f3", columns={"customer_id"})})
 * @ORM\Entity(repositoryClass=LinerRepository::class)
 */
class Liner
{
    /**
     * @var \Symfony\Component\Uid\Uuid
     *
     * @ORM\Column(name="id", type="uuid", nullable=false, options={"default"="uuid_generate_v4()"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class=UuidV4Generator::class)
     */
    private $id = 'uuid_generate_v4()';

    /**
     * @var LinerType
     *
     * @ORM\Column(name="liner", type="LinerType", nullable=false)
     * @DoctrineAssert\Enum(entity="App\DBAL\Types\LinerType")
     */
    private $liner;

    /**
     * @var \Customer
     *
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="liners")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $customer;

    public function getId()
    {
        return $this->id;
    }

    public function getLiner()
    {
        return $this->liner;
    }

    public function setLiner($liner): self
    {
        $this->liner = $liner;

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
