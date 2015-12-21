<?php

namespace Marknl\Iodef\Elements;

use Marknl\Iodef\IodefElement;

class Record extends IodefElement
{
    public function __construct()
    {
        $this->attributes = [
            'restriction' => '',
        ];

        $this->elements = [
            'RecordData' => 'REQUIRED_MULTI',
        ];
    }

    /**
     * Attribute validation rules
     * @return array
     */
    public function getAttributeRules()
    {
        return [
            'restriction' => 'sometimes|in:public,need-to-know,private,default',
        ];
    }
}
