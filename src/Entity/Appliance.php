<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\DBAL\Types\ApplianceType;
use App\Repository\ApplianceRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Fresh\DoctrineEnumBundle\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Uid\Uuid;
use Symfony\Bridge\Doctrine\IdGenerator\UuidV4Generator;

/**
 * Appliance
 *
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ApplianceRepository::class)
 */
class Appliance
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
     * @var ApplianceType Name of the appliance
     *
     * @ORM\Column(name="appliance", type="ApplianceType", nullable=false)
     * @DoctrineAssert\Enum(entity="App\DBAL\Types\ApplianceType")
     */
    private $appliance;

    /**
     * @var \Customer the customer to which this appliance belongs.
     *
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $customer;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAppliance()
    {
        return $this->appliance;
    }

    public function setAppliance($appliance): self
    {
        $this->appliance = $appliance;

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
