<?php

namespace App\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class FuelType extends AbstractEnumType
{
    public const F_WOOD = "Wood";
    public const F_PELLET = "Pellet";
    public const F_OIL = "Oil";
    public const F_GAS = "Gas";
    public const F_COAL = "Coal";

    protected static $choices = [
        self::F_WOOD => "Wood",
        self::F_PELLET => "Pellet",
        self::F_OIL => "Oil",
        self::F_GAS => "Gas",
        self::F_COAL => "Coal"
    ];
}
