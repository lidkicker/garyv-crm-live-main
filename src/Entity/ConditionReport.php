<?php
// api/src/Entity/ConditionReport.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ConditionReportRepository;
use DateTime;
use DateTimeImmutable;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\OneToOne;
use JetBrains\PhpStorm\Pure;
use Symfony\Component\Uid\Uuid;
use Symfony\Bridge\Doctrine\IdGenerator\UuidV4Generator;

/**
 * ConditionReport
 *
 * @ApiResource()
 * @ORM\Table(name="condition_report", uniqueConstraints={@ORM\UniqueConstraint(name="uniq_53b175e82989f1fd", columns={"invoice_id"})})
 * @ORM\Entity(repositoryClass=ConditionReportRepository::class)
 */
class ConditionReport
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
     * @var string|null
     *
     * @ORM\Column(name="report_comments", type="string", length=255, nullable=true)
     */
    private $reportComments;


    /**
     * @var int|null
     *
     * @ORM\Column(name="last_cleaned_year", type="smallint", nullable=true)
     */
    private $lastCleanedYear;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_of_next_service", type="datetime", nullable=true)
     */
    private $dateOfNextService;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_never_cleaned", type="boolean", nullable=false)
     */
    private $isNeverCleaned=false;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_chimney_service_report", type="boolean", nullable=false)
     */
    private $isChimneyServiceReport=false;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_1_height", type="smallint", nullable=true)
     */
    public $_1_Height;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_2_chimney_cap", type="smallint", nullable=true)
     */
    private $_2_Chimney_Cap;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_2_spark_arrestor", type="smallint", nullable=true)
     */
    private $_2_Spark_Arrestor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_3_crown", type="smallint", nullable=true)
     */
    private $_3_Crown;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_3_wash", type="smallint", nullable=true)
     */
    private $_3_Wash;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_4_brickwork", type="smallint", nullable=true)
     */
    private $_4_Brickwork;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_4_mortar", type="smallint", nullable=true)
     */
    private $_4_Mortar;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_5_flashing", type="smallint", nullable=true)
     */
    private $_5_Flashing;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_6_flue_liner", type="smallint", nullable=true)
     */
    private $_6_Flue_Liner;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_7_moisture_resistance", type="smallint", nullable=true)
     */
    private $_7_Moisture_Resistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_8_smoke_chamber", type="smallint", nullable=true)
     */
    private $_8_Smoke_Chamber;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_9_damper", type="smallint", nullable=true)
     */
    private $_9_Damper;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_10_firebox", type="smallint", nullable=true)
     */
    private $_10_Firebox;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_10_grate", type="smallint", nullable=true)
     */
    private $_10_Grate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_11_ash_container", type="smallint", nullable=true)
     */
    private $_11_Ash_Container;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_12_spark_screen", type="smallint", nullable=true)
     */
    private $_12_Spark_Screen;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_12_doors", type="smallint", nullable=true)
     */
    private $_12_Doors;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_13_tools", type="smallint", nullable=true)
     */
    private $_13_Tools;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_13_gloves", type="smallint", nullable=true)
     */
    private $_13_Gloves;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_14_hearth_protection", type="smallint", nullable=true)
     */
    private $_14_Hearth_Protection;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_15_description", type="string", length=255, nullable=true)
     */
    private $_15_Description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_15_", type="smallint", nullable=true)
     */
    private $_15_;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_16_connector_pipe_condition", type="smallint", nullable=true)
     */
    private $_16_Connector_Pipe_Condition;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_17_nfpa_irc_approved_connection_and_flue", type="smallint", nullable=true)
     */
    private $_17_NFPA_IRC_Approved_Connection_and_Flue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_18_installation_thimble_clearances", type="smallint", nullable=true)
     */
    private $_18_Installation_Thimble_Clearances;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_19_fire_extinguisher", type="smallint", nullable=true)
     */
    private $_19_Fire_Extinguisher;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_19_smoke_detectors", type="smallint", nullable=true)
     */
    private $_19_Smoke_Detectors;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_19_co_alarms", type="smallint", nullable=true)
     */
    private $_19_CO_Alarms;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_20_gas_oil_furnace_flue_liner", type="smallint", nullable=true)
     */
    private $_20_Gas_Oil_Furnace_Flue_Liner;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_21_fire_escape_plan", type="smallint", nullable=true)
     */
    private $_21_Fire_Escape_Plan;

    /**
     * @var datetime_immutable
     *
     * @ORM\Column(name="date_created", type="datetime_immutable", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateCreated = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateModified = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="zoho_id", type="string", nullable=true)
     */
    private $zohoId;

    /**
     * @var ArrayCollection|null
     *
     * @OneToMany(targetEntity="Wood", mappedBy="conditionReport")
     */
    private $woods;

    /**
     * @var \Invoice
     *
     * @ORM\OneToOne(targetEntity="Invoice", inversedBy="conditionReport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="invoice_id", referencedColumnName="id")
     * })
     */
    private $invoice;

    #[Pure] public function __construct()
    {
        $this->woods = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getReportComments(): ?string
    {
        return $this->reportComments;
    }

    public function setReportComments(?string $reportComments): self
    {
        $this->reportComments = $reportComments;

        return $this;
    }

    public function getLastCleanedYear(): ?int
    {
        return $this->lastCleanedYear;
    }

    public function setLastCleanedYear(?int $lastCleanedYear): self
    {
        $this->lastCleanedYear = $lastCleanedYear;

        return $this;
    }

    public function getDateOfNextService(): ?\DateTimeInterface
    {
        return $this->dateOfNextService;
    }

    public function setDateOfNextService(?\DateTimeInterface $dateOfNextService): self
    {
        $this->dateOfNextService = $dateOfNextService;

        return $this;
    }

    public function getIsNeverCleaned(): ?bool
    {
        return $this->isNeverCleaned;
    }

    public function setIsNeverCleaned(bool $isNeverCleaned): self
    {
        $this->isNeverCleaned = $isNeverCleaned;

        return $this;
    }

    public function getIsChimneyServiceReport(): ?bool
    {
        return $this->isChimneyServiceReport;
    }

    public function setIsChimneyServiceReport(bool $isChimneyServiceReport): self
    {
        $this->isChimneyServiceReport = $isChimneyServiceReport;

        return $this;
    }

    public function get1Height(): ?int
    {
        return $this->_1Height;
    }

    public function set1Height(?int $_1Height): self
    {
        $this->_1Height = $_1Height;

        return $this;
    }

    public function get2ChimneyCap(): ?int
    {
        return $this->_2ChimneyCap;
    }

    public function set2ChimneyCap(?int $_2ChimneyCap): self
    {
        $this->_2ChimneyCap = $_2ChimneyCap;

        return $this;
    }

    public function get2SparkArrestor(): ?int
    {
        return $this->_2SparkArrestor;
    }

    public function set2SparkArrestor(?int $_2SparkArrestor): self
    {
        $this->_2SparkArrestor = $_2SparkArrestor;

        return $this;
    }

    public function get3Crown(): ?int
    {
        return $this->_3Crown;
    }

    public function set3Crown(?int $_3Crown): self
    {
        $this->_3Crown = $_3Crown;

        return $this;
    }

    public function get3Wash(): ?int
    {
        return $this->_3Wash;
    }

    public function set3Wash(?int $_3Wash): self
    {
        $this->_3Wash = $_3Wash;

        return $this;
    }

    public function get4Brickwork(): ?int
    {
        return $this->_4Brickwork;
    }

    public function set4Brickwork(?int $_4Brickwork): self
    {
        $this->_4Brickwork = $_4Brickwork;

        return $this;
    }

    public function get4Mortar(): ?int
    {
        return $this->_4Mortar;
    }

    public function set4Mortar(?int $_4Mortar): self
    {
        $this->_4Mortar = $_4Mortar;

        return $this;
    }

    public function get5Flashing(): ?int
    {
        return $this->_5Flashing;
    }

    public function set5Flashing(?int $_5Flashing): self
    {
        $this->_5Flashing = $_5Flashing;

        return $this;
    }

    public function get6FlueLiner(): ?int
    {
        return $this->_6FlueLiner;
    }

    public function set6FlueLiner(?int $_6FlueLiner): self
    {
        $this->_6FlueLiner = $_6FlueLiner;

        return $this;
    }

    public function get7MoistureResistance(): ?int
    {
        return $this->_7MoistureResistance;
    }

    public function set7MoistureResistance(?int $_7MoistureResistance): self
    {
        $this->_7MoistureResistance = $_7MoistureResistance;

        return $this;
    }

    public function get8SmokeChamber(): ?int
    {
        return $this->_8SmokeChamber;
    }

    public function set8SmokeChamber(?int $_8SmokeChamber): self
    {
        $this->_8SmokeChamber = $_8SmokeChamber;

        return $this;
    }

    public function get9Damper(): ?int
    {
        return $this->_9Damper;
    }

    public function set9Damper(?int $_9Damper): self
    {
        $this->_9Damper = $_9Damper;

        return $this;
    }

    public function get10Firebox(): ?int
    {
        return $this->_10Firebox;
    }

    public function set10Firebox(?int $_10Firebox): self
    {
        $this->_10Firebox = $_10Firebox;

        return $this;
    }

    public function get10Grate(): ?int
    {
        return $this->_10Grate;
    }

    public function set10Grate(?int $_10Grate): self
    {
        $this->_10Grate = $_10Grate;

        return $this;
    }

    public function get11AshContainer(): ?int
    {
        return $this->_11AshContainer;
    }

    public function set11AshContainer(?int $_11AshContainer): self
    {
        $this->_11AshContainer = $_11AshContainer;

        return $this;
    }

    public function get12SparkScreen(): ?int
    {
        return $this->_12SparkScreen;
    }

    public function set12SparkScreen(?int $_12SparkScreen): self
    {
        $this->_12SparkScreen = $_12SparkScreen;

        return $this;
    }

    public function get12Doors(): ?int
    {
        return $this->_12Doors;
    }

    public function set12Doors(?int $_12Doors): self
    {
        $this->_12Doors = $_12Doors;

        return $this;
    }

    public function get13Tools(): ?int
    {
        return $this->_13Tools;
    }

    public function set13Tools(?int $_13Tools): self
    {
        $this->_13Tools = $_13Tools;

        return $this;
    }

    public function get13Gloves(): ?int
    {
        return $this->_13Gloves;
    }

    public function set13Gloves(?int $_13Gloves): self
    {
        $this->_13Gloves = $_13Gloves;

        return $this;
    }

    public function get14HearthProtection(): ?int
    {
        return $this->_14HearthProtection;
    }

    public function set14HearthProtection(?int $_14HearthProtection): self
    {
        $this->_14HearthProtection = $_14HearthProtection;

        return $this;
    }

    public function get15Description(): ?string
    {
        return $this->_15Description;
    }

    public function set15Description(?string $_15Description): self
    {
        $this->_15Description = $_15Description;

        return $this;
    }

    public function get15(): ?int
    {
        return $this->_15;
    }

    public function set15(?int $_15): self
    {
        $this->_15 = $_15;

        return $this;
    }

    public function get16ConnectorPipeCondition(): ?int
    {
        return $this->_16ConnectorPipeCondition;
    }

    public function set16ConnectorPipeCondition(?int $_16ConnectorPipeCondition): self
    {
        $this->_16ConnectorPipeCondition = $_16ConnectorPipeCondition;

        return $this;
    }

    public function get17NfpaIrcApprovedConnectionAndFlue(): ?int
    {
        return $this->_17NfpaIrcApprovedConnectionAndFlue;
    }

    public function set17NfpaIrcApprovedConnectionAndFlue(?int $_17NfpaIrcApprovedConnectionAndFlue): self
    {
        $this->_17NfpaIrcApprovedConnectionAndFlue = $_17NfpaIrcApprovedConnectionAndFlue;

        return $this;
    }

    public function get18InstallationThimbleClearances(): ?int
    {
        return $this->_18InstallationThimbleClearances;
    }

    public function set18InstallationThimbleClearances(?int $_18InstallationThimbleClearances): self
    {
        $this->_18InstallationThimbleClearances = $_18InstallationThimbleClearances;

        return $this;
    }

    public function get19FireExtinguisher(): ?int
    {
        return $this->_19FireExtinguisher;
    }

    public function set19FireExtinguisher(?int $_19FireExtinguisher): self
    {
        $this->_19FireExtinguisher = $_19FireExtinguisher;

        return $this;
    }

    public function get19SmokeDetectors(): ?int
    {
        return $this->_19SmokeDetectors;
    }

    public function set19SmokeDetectors(?int $_19SmokeDetectors): self
    {
        $this->_19SmokeDetectors = $_19SmokeDetectors;

        return $this;
    }

    public function get19CoAlarms(): ?int
    {
        return $this->_19CoAlarms;
    }

    public function set19CoAlarms(?int $_19CoAlarms): self
    {
        $this->_19CoAlarms = $_19CoAlarms;

        return $this;
    }

    public function get20GasOilFurnaceFlueLiner(): ?int
    {
        return $this->_20GasOilFurnaceFlueLiner;
    }

    public function set20GasOilFurnaceFlueLiner(?int $_20GasOilFurnaceFlueLiner): self
    {
        $this->_20GasOilFurnaceFlueLiner = $_20GasOilFurnaceFlueLiner;

        return $this;
    }

    public function get21FireEscapePlan(): ?int
    {
        return $this->_21FireEscapePlan;
    }

    public function set21FireEscapePlan(?int $_21FireEscapePlan): self
    {
        $this->_21FireEscapePlan = $_21FireEscapePlan;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeImmutable
    {
        return $this->dateCreated;
    }

    public function setDateCreated(\DateTimeImmutable $dateCreated): self
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    public function getDateModified(): ?\DateTimeInterface
    {
        return $this->dateModified;
    }

    public function setDateModified(\DateTimeInterface $dateModified): self
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    public function getZohoId(): ?string
    {
        return $this->zohoId;
    }

    public function setZohoId(?string $zohoId): self
    {
        $this->zohoId = $zohoId;

        return $this;
    }

    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }

    public function setInvoice(?Invoice $invoice): self
    {
        $this->invoice = $invoice;

        return $this;
    }


}
