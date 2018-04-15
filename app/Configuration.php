<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $table = 'configuration';

    public static function getValue($key) {
        $data = self::where('configuration_name', $key)->first();

        if (empty($data)) {
            return env($key, $key);
        }

        return $data->value;
    }

    public static function setValue($key, $value) {
        $data = self::where('configuration_name', $key)->first();

        if (empty($data)) {
            $data = new self();
            $data->configuration_name = $key;
        }

        if (empty($value)) {
            $value = '';
        }

        $data->value = $value;
        $data->save();
    }
}
