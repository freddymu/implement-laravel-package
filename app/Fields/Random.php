<?php

namespace App\Fields;

use freddymu\Press\Fields\FieldContract;

class Random extends FieldContract {
    public static function process($fieldType, $fieldValue, $data) {
        return [
            'random' => 'it worked!'
        ];
    }
}
