<?php

namespace App\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class WoodType extends AbstractEnumType
{
    public const W_HARD = "Hard";
    public const W_SOFT = "Soft";
    public const W_DRY = "Dry";
    public const W_WET = "Wet";

    protected static $choices = [
        self::W_HARD => "Hard",
        self::W_SOFT => "Soft",
        self::W_DRY => "Dry",
        self::W_WET => "Wet"
    ];
}
