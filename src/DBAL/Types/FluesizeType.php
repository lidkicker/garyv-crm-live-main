<?php

namespace App\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class FluesizeType extends AbstractEnumType
{
    public const FS_8x8 = "8in x 8in";
    public const FS_8x13 = "8in x 13in";
    public const FS_13x13 = "13in x 13in";
    public const FS_8x17 = "8in x 17in";
    public const FS_13x17 = "13in x 17in";
    public const FS_6ROUND = "6in round";
    public const FS_8ROUND = "8in round";
    public const FS_OTHER = "Other";

    protected static $choices = [
        self::FS_8x8 => "8in x 8in",
        self::FS_8x13 => "8in x 13in",
        self::FS_13x13 => "13in x 13in",
        self::FS_8x17 => "8in x 17in",
        self::FS_13x17 => "13in x 17in",
        self::FS_6ROUND => "6in round",
        self::FS_8ROUND => "8in round",
        self::FS_OTHER => "Other"
    ];
}
