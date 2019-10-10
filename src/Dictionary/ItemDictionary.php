<?php

namespace App\Dictionary;


class ItemDictionary
{
    const NAME = 'name';
    const MAX_DURABILITY = 'maxDurability';

    const ITEM_IDS = [
        1 => self::COPPER_PICKAXE
    ];

    const COPPER_PICKAXE = [
        self::NAME => 'Медная кирка',
        self::MAX_DURABILITY => 10
    ];
}