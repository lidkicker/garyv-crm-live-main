<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerHistory
 *
 * @ORM\Table(name="customer_history")
 * @ORM\Entity
 */
class CustomerHistory
{
    /**
     * @var uuid
     *
     * @ORM\Column(name="id", type="uuid", nullable=false, options={"default"="uuid_generate_v4()"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="customer_history_id_seq", allocationSize=1, initialValue=1)
     */
    private $id = 'uuid_generate_v4()';

    /**
     * @var datetime_immutable
     *
     * @ORM\Column(name="ch_date_created", type="datetime_immutable", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $chDateCreated = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_id", type="guid", nullable=true)
     */
    private $customerId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zoho_id", type="string", length=255, nullable=true)
     */
    private $zohoId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="kbw_id", type="smallint", nullable=true)
     */
    private $kbwId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="import_csv_id", type="smallint", nullable=true)
     */
    private $importCsvId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=false)
     */
    private $lastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="business_name", type="string", length=255, nullable=true)
     */
    private $businessName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="street1", type="string", length=255, nullable=true)
     */
    private $street1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="street2", type="string", length=255, nullable=true)
     */
    private $street2;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=2, nullable=false)
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="county", type="string", length=255, nullable=true)
     */
    private $county;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=255, nullable=false)
     */
    private $zip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=2, nullable=true)
     */
    private $country;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_current_resident", type="boolean", nullable=false)
     */
    private $isCurrentResident = false;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_bad_address", type="boolean", nullable=false)
     */
    private $isBadAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bad_address_reason", type="string", length=255, nullable=true)
     */
    private $badAddressReason;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var int|null
     *
     * @ORM\Column(name="number_of_stories", type="smallint", nullable=true)
     */
    private $numberOfStories;

    /**
     * @var int|null
     *
     * @ORM\Column(name="number_of_appliances", type="smallint", nullable=true)
     */
    private $numberOfAppliances;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amount_of_fuel_burned_per_season", type="string", length=255, nullable=true)
     */
    private $amountOfFuelBurnedPerSeason;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_serious_woodburner", type="boolean", nullable=false)
     */
    private $isSeriousWoodburner;

    /**
     * @var bool
     *
     * @ORM\Column(name="do_put_on_mailing_list", type="boolean", nullable=false)
     */
    private $doPutOnMailingList;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fluesize_other", type="string", length=255, nullable=true)
     */
    private $fluesizeOther;

    /**
     * @var string|null
     *
     * @ORM\Column(name="chimney_height", type="string", length=255, nullable=true)
     */
    private $chimneyHeight;

    /**
     * @var string|null
     *
     * @ORM\Column(name="outside_chimney_dimensions", type="string", length=255, nullable=true)
     */
    private $outsideChimneyDimensions;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fireplace_opening_size", type="string", length=255, nullable=true)
     */
    private $fireplaceOpeningSize;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
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
     * @ORM\Column(name="appliances_temp", type="string", length=255, nullable=true)
     */
    private $appliancesTemp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fluesizes_temp", type="string", length=255, nullable=true)
     */
    private $fluesizesTemp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fuels_temp", type="string", length=255, nullable=true)
     */
    private $fuelsTemp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="liners_temp", type="string", length=255, nullable=true)
     */
    private $linersTemp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="woods_temp", type="string", length=255, nullable=true)
     */
    private $woodsTemp;

    public function getId()
    {
        return $this->id;
    }

    public function getChDateCreated(): ?\DateTimeImmutable
    {
        return $this->chDateCreated;
    }

    public function setChDateCreated(\DateTimeImmutable $chDateCreated): self
    {
        $this->chDateCreated = $chDateCreated;

        return $this;
    }

    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    public function setCustomerId(?string $customerId): self
    {
        $this->customerId = $customerId;

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

    public function getKbwId(): ?int
    {
        return $this->kbwId;
    }

    public function setKbwId(?int $kbwId): self
    {
        $this->kbwId = $kbwId;

        return $this;
    }

    public function getImportCsvId(): ?int
    {
        return $this->importCsvId;
    }

    public function setImportCsvId(?int $importCsvId): self
    {
        $this->importCsvId = $importCsvId;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getBusinessName(): ?string
    {
        return $this->businessName;
    }

    public function setBusinessName(?string $businessName): self
    {
        $this->businessName = $businessName;

        return $this;
    }

    public function getStreet1(): ?string
    {
        return $this->street1;
    }

    public function setStreet1(?string $street1): self
    {
        $this->street1 = $street1;

        return $this;
    }

    public function getStreet2(): ?string
    {
        return $this->street2;
    }

    public function setStreet2(?string $street2): self
    {
        $this->street2 = $street2;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getCounty(): ?string
    {
        return $this->county;
    }

    public function setCounty(?string $county): self
    {
        $this->county = $county;

        return $this;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getIsCurrentResident(): ?bool
    {
        return $this->isCurrentResident;
    }

    public function setIsCurrentResident(bool $isCurrentResident): self
    {
        $this->isCurrentResident = $isCurrentResident;

        return $this;
    }

    public function getIsBadAddress(): ?bool
    {
        return $this->isBadAddress;
    }

    public function setIsBadAddress(bool $isBadAddress): self
    {
        $this->isBadAddress = $isBadAddress;

        return $this;
    }

    public function getBadAddressReason(): ?string
    {
        return $this->badAddressReason;
    }

    public function setBadAddressReason(?string $badAddressReason): self
    {
        $this->badAddressReason = $badAddressReason;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNumberOfStories(): ?int
    {
        return $this->numberOfStories;
    }

    public function setNumberOfStories(?int $numberOfStories): self
    {
        $this->numberOfStories = $numberOfStories;

        return $this;
    }

    public function getNumberOfAppliances(): ?int
    {
        return $this->numberOfAppliances;
    }

    public function setNumberOfAppliances(?int $numberOfAppliances): self
    {
        $this->numberOfAppliances = $numberOfAppliances;

        return $this;
    }

    public function getAmountOfFuelBurnedPerSeason(): ?string
    {
        return $this->amountOfFuelBurnedPerSeason;
    }

    public function setAmountOfFuelBurnedPerSeason(?string $amountOfFuelBurnedPerSeason): self
    {
        $this->amountOfFuelBurnedPerSeason = $amountOfFuelBurnedPerSeason;

        return $this;
    }

    public function getIsSeriousWoodburner(): ?bool
    {
        return $this->isSeriousWoodburner;
    }

    public function setIsSeriousWoodburner(bool $isSeriousWoodburner): self
    {
        $this->isSeriousWoodburner = $isSeriousWoodburner;

        return $this;
    }

    public function getDoPutOnMailingList(): ?bool
    {
        return $this->doPutOnMailingList;
    }

    public function setDoPutOnMailingList(bool $doPutOnMailingList): self
    {
        $this->doPutOnMailingList = $doPutOnMailingList;

        return $this;
    }

    public function getFluesizeOther(): ?string
    {
        return $this->fluesizeOther;
    }

    public function setFluesizeOther(?string $fluesizeOther): self
    {
        $this->fluesizeOther = $fluesizeOther;

        return $this;
    }

    public function getChimneyHeight(): ?string
    {
        return $this->chimneyHeight;
    }

    public function setChimneyHeight(?string $chimneyHeight): self
    {
        $this->chimneyHeight = $chimneyHeight;

        return $this;
    }

    public function getOutsideChimneyDimensions(): ?string
    {
        return $this->outsideChimneyDimensions;
    }

    public function setOutsideChimneyDimensions(?string $outsideChimneyDimensions): self
    {
        $this->outsideChimneyDimensions = $outsideChimneyDimensions;

        return $this;
    }

    public function getFireplaceOpeningSize(): ?string
    {
        return $this->fireplaceOpeningSize;
    }

    public function setFireplaceOpeningSize(?string $fireplaceOpeningSize): self
    {
        $this->fireplaceOpeningSize = $fireplaceOpeningSize;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function setDateCreated(\DateTimeInterface $dateCreated): self
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

    public function getAppliancesTemp(): ?string
    {
        return $this->appliancesTemp;
    }

    public function setAppliancesTemp(?string $appliancesTemp): self
    {
        $this->appliancesTemp = $appliancesTemp;

        return $this;
    }

    public function getFluesizesTemp(): ?string
    {
        return $this->fluesizesTemp;
    }

    public function setFluesizesTemp(?string $fluesizesTemp): self
    {
        $this->fluesizesTemp = $fluesizesTemp;

        return $this;
    }

    public function getFuelsTemp(): ?string
    {
        return $this->fuelsTemp;
    }

    public function setFuelsTemp(?string $fuelsTemp): self
    {
        $this->fuelsTemp = $fuelsTemp;

        return $this;
    }

    public function getLinersTemp(): ?string
    {
        return $this->linersTemp;
    }

    public function setLinersTemp(?string $linersTemp): self
    {
        $this->linersTemp = $linersTemp;

        return $this;
    }

    public function getWoodsTemp(): ?string
    {
        return $this->woodsTemp;
    }

    public function setWoodsTemp(?string $woodsTemp): self
    {
        $this->woodsTemp = $woodsTemp;

        return $this;
    }


}
