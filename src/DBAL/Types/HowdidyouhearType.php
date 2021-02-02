<?php

namespace App\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class HowdidyouhearType extends AbstractEnumType
{
    public const HDYH_TV = "TV";
    public const HDYH_RADIO = "Radio";
    public const HDYH_WEBSITE = "Website";
    public const HDYH_NEWSPAPER = "Newspaper";
    public const HDYH_YELLOW_PAGES = "Yellow Pages";
    public const HDYH_DIRECT_MAIL = "Direct Mail";
    public const HDYH_SOCIAL_MEDIA = "Social Media";
    public const HDYH_REFERRAL = "Referral";
    public const HDYH_REPEAT_CUSTOMER = "Repeat Customer";
    public const HDYH_INTERNET_AD = "Internet Ad";
    public const HDYH_OTHER = "Other";

    protected static $choices = [
        self::HDYH_TV => "TV",
        self::HDYH_RADIO => "Radio",
        self::HDYH_WEBSITE => "Website",
        self::HDYH_NEWSPAPER => "Newspaper",
        self::HDYH_YELLOW_PAGES => "Yellow Pages",
        self::HDYH_DIRECT_MAIL => "Direct Mail",
        self::HDYH_SOCIAL_MEDIA => "Social Media",
        self::HDYH_REFERRAL => "Referral",
        self::HDYH_REPEAT_CUSTOMER => "Repeat Customer",
        self::HDYH_INTERNET_AD => "Internet Ad",
        self::HDYH_OTHER => "Other"
    ];
}
