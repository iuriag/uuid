<?php
/**
 * Created by PhpStorm.
 * User: iuriguntchnigg
 * Date: 01/09/2018
 * Time: 15:02
 */

namespace I2\UUID;

use Webpatser\Uuid\Uuid;
trait Uuids
{

    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::generate()->string;
        });
    }
}