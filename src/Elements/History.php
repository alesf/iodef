<?php

namespace Marknl\Iodef\Elements;

use Marknl\Iodef\IodefElement;

class History extends IodefElement
{
    public function __construct()
    {
        $this->attributes = [
            'restriction' => '',
        ];

        $this->elements = [
            'HistoryItem' => 'REQUIRED_MULTI',
        ];
    }

    /**
     * Attribute validation rules
     * @return array
     */
    public function getAttributeRules()
    {
        return [
            'restriction'   => 'sometimes|in:public,need-to-know,private,default',
        ];
    }
}
