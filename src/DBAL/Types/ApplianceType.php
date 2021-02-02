<?php

namespace App\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class ApplianceType extends AbstractEnumType
{
    public const A_PREFAB = "Prefab";
    public const A_MASONRY = "Masonry";
    public const A_STOVE = "Stove";
    public const A_INSERT = "Insert";
    public const A_FURNACE = "Furnace";

    protected static $choices = [
        self::A_PREFAB => "Prefab",
        self::A_MASONRY => "Masonry",
        self::A_STOVE => "Stove",
        self::A_INSERT => "Insert",
        self::A_FURNACE => "Furnace"
    ];
}
