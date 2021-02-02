<?php

namespace App\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class LinerType extends AbstractEnumType
{
    public const L_FLUE_TILE = "Flue tile";
    public const L_STAINLESS = "Stainless";
    public const L_CAST = "Cast";
    public const L_UNLINED = "Unlined";

    protected static $choices = [
        self::L_FLUE_TILE => "Flue tile",
        self::L_STAINLESS => "Stainless",
        self::L_CAST => "Cast",
        self::L_UNLINED => "Unlined"
    ];
}
