<?php

namespace App\Formatter\OutputFormatter;

use App\Dictionary\ItemDictionary;
use App\Entity\StoredItem;

class StoreFormatter extends AbstractOutputFormatter
{
    const TEMPLATE = 'Название предмета: %s, Количество %d, Прочность %d/%d';

    /**
     * @param StoredItem[] $data
     */
    public function format($data)
    {
        foreach ($data as $storedItem) {
            $item = $storedItem->getItem();
            $itemData = isset(ItemDictionary::ITEM_IDS[$item->getItemType()])
                ? ItemDictionary::ITEM_IDS[$item->getItemType()]
                : null;

            if (!$itemData) {
                continue;
            }

            $text = sprintf(
                self::TEMPLATE,
                $itemData[ItemDictionary::NAME],
                $storedItem->getAmount(),
                $storedItem->getDurability(),
                $itemData[ItemDictionary::MAX_DURABILITY]
            );

            $this->printLn($text);
        }
    }
}