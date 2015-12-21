<?php

namespace Marknl\Iodef\Elements;

use Marknl\Iodef\IodefElement;

class ProtoType extends IodefElement
{
    public $value = '';

    /**
     * Value validation rule
     * @return array
     */
    public static function getValueRule()
    {
        return [
            'value' => 'required|integer',
        ];
    }
}
