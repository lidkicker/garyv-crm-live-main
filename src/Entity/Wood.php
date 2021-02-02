<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\WoodRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use App\DBAL\Types\WoodType;
use Fresh\DoctrineEnumBundle\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Uid\Uuid;
use Symfony\Bridge\Doctrine\IdGenerator\UuidV4Generator;

/**

 * Wood
 *
 * @ApiResource()
 * @ORM\Table(name="wood", indexes={@ORM\Index(name="idx_3c9d190d2f9e4ad2", columns={"condition_report_id"})})
 * @ORM\Entity(repositoryClass=WoodRepository::class)
 */
class Wood
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
     * @var WoodType
     *
     * @ORM\Column(name="wood", type="WoodType", nullable=false)
     * @DoctrineAssert\Enum(entity="App\DBAL\Types\WoodType")
     */
    private $wood;

    /**
     * @var \ConditionReport
     *
     * @ORM\ManyToOne(targetEntity="ConditionReport", inversedBy="woods")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="condition_report_id", referencedColumnName="id")
     * })
     */
    private $conditionReport;

    public function getId()
    {
        return $this->id;
    }

    public function getWood()
    {
        return $this->wood;
    }

    public function setWood($wood): self
    {
        $this->wood = $wood;

        return $this;
    }

    public function getConditionReport(): ?ConditionReport
    {
        return $this->conditionReport;
    }

    public function setConditionReport(?ConditionReport $conditionReport): self
    {
        $this->conditionReport = $conditionReport;

        return $this;
    }


}
