<?php
/**
 * Created by PhpStorm.
 * User: bp
 * Date: 7/20/21
 * Time: 10:24 AM
 */

namespace Peter\LaravelLog;

use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class LaravelLog
{
    public function log($date)
    {
        $date = new Carbon($date, today());

        $daily = storage_path("logs/laravel-{$date->format( 'Y-m-d' )}.log");
        $stuck = storage_path("logs/laravel.log");

        $log = [];

        if (File::exists($daily)) {
            $log = [
                'LastModified' => new Carbon(File::lastModified($daily)),
                'size' => File::size($daily),
                'file' => File::get($daily),
            ];
        } else {
            $log = [
                'LastModified' => new Carbon(File::lastModified($stuck)),
                'size' => File::size($stuck),
                'file' => File::get($stuck),
            ];
        }
        return $log;

    }
}