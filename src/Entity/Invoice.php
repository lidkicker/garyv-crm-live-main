<?php
// api/src/Entity/Invoice.php

namespace App\Entity;

use DateTime;
use DateTimeImmutable;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\InvoiceRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\OneToOne;
use JetBrains\PhpStorm\Pure;
use App\DBAL\Types\HowdidyouhearType;
use Fresh\DoctrineEnumBundle\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Uid\Uuid;
use Symfony\Bridge\Doctrine\IdGenerator\UuidV4Generator;

/**
 * Invoice
 *
 * @ApiResource
 * @ORM\Table(name="invoice", indexes={@ORM\Index(name="idx_906517449395c3f3", columns={"customer_id"})})
 * @ORM\Entity(repositoryClass=InvoiceRepository::class)
 */
class Invoice
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
     * @ORM\Column(name="zoho_id", type="string", length=255, nullable=true)
     */
    private $zohoId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zoho_customer_id", type="string", length=255, nullable=true)
     */
    private $zohoCustomerId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=16, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="account_name", type="string", length=16, nullable=false)
     */
    private $accountName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comments", type="string", nullable=true)
     */
    private $comments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="receipt_details", type="string", length=255, nullable=true)
     */
    private $receiptDetails;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="written_date", type="datetime", nullable=false)
     */
    private $writtenDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="service_completed_date", type="datetime", nullable=false)
     */
    private $serviceCompletedDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_delivered", type="boolean", nullable=false)
     */
    private $isDelivered;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="customer_verification_date", type="datetime", nullable=true)
     */
    private $customerVerificationDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="next_servicing_scheduled_date_time", type="datetime", nullable=true)
     */
    private $nextServicingScheduledDateTime;

    /**
     * @var HowdidyouhearType|null
     *
     * @ORM\Column(name="howdidyouhear", type="HowdidyouhearType", nullable=true)
     */
    private $howdidyouhear;

    /**
     * @var string|null
     *
     * @ORM\Column(name="howdidyouhear_other", type="string", length=255, nullable=true)
     */
    private $howdidyouhearOther;

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
     * @var \Customer
     *
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="invoices")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $customer;

    /**
     * @var \ConditionReport
     *
     * @ORM\OneToOne(targetEntity="ConditionReport", mappedBy="invoice")
     */
    private $conditionReport;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="LineItem", mappedBy="invoice")
     */
    public $lineItems;



    #[Pure] public function __construct()
    {
        $this->lineItems = new ArrayCollection();
    }

     public function getId()
    {
        return $this->id;
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

    public function getZohoCustomerId(): ?string
    {
        return $this->zohoCustomerId;
    }

    public function setZohoCustomerId(?string $zohoCustomerId): self
    {
        $this->zohoCustomerId = $zohoCustomerId;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    public function setAccountName(string $accountName): self
    {
        $this->accountName = $accountName;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    public function getReceiptDetails(): ?string
    {
        return $this->receiptDetails;
    }

    public function setReceiptDetails(?string $receiptDetails): self
    {
        $this->receiptDetails = $receiptDetails;

        return $this;
    }

    public function getWrittenDate(): ?\DateTimeInterface
    {
        return $this->writtenDate;
    }

    public function setWrittenDate(\DateTimeInterface $writtenDate): self
    {
        $this->writtenDate = $writtenDate;

        return $this;
    }

    public function getServiceCompletedDate(): ?\DateTimeInterface
    {
        return $this->serviceCompletedDate;
    }

    public function setServiceCompletedDate(\DateTimeInterface $serviceCompletedDate): self
    {
        $this->serviceCompletedDate = $serviceCompletedDate;

        return $this;
    }

    public function getIsDelivered(): ?bool
    {
        return $this->isDelivered;
    }

    public function setIsDelivered(bool $isDelivered): self
    {
        $this->isDelivered = $isDelivered;

        return $this;
    }

    public function getCustomerVerificationDate(): ?\DateTimeInterface
    {
        return $this->customerVerificationDate;
    }

    public function setCustomerVerificationDate(?\DateTimeInterface $customerVerificationDate): self
    {
        $this->customerVerificationDate = $customerVerificationDate;

        return $this;
    }

    public function getNextServicingScheduledDateTime(): ?\DateTimeInterface
    {
        return $this->nextServicingScheduledDateTime;
    }

    public function setNextServicingScheduledDateTime(?\DateTimeInterface $nextServicingScheduledDateTime): self
    {
        $this->nextServicingScheduledDateTime = $nextServicingScheduledDateTime;

        return $this;
    }

    public function getHowdidyouhear()
    {
        return $this->howdidyouhear;
    }

    public function setHowdidyouhear($howdidyouhear): self
    {
        $this->howdidyouhear = $howdidyouhear;

        return $this;
    }

    public function getHowdidyouhearOther(): ?string
    {
        return $this->howdidyouhearOther;
    }

    public function setHowdidyouhearOther(?string $howdidyouhearOther): self
    {
        $this->howdidyouhearOther = $howdidyouhearOther;

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
