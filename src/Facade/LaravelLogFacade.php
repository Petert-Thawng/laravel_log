<?php
/**
 * Created by PhpStorm.
 * User: bp
 * Date: 7/20/21
 * Time: 10:22 AM
 */
namespace Peter\LaravelLog\Facades;
use Illuminate\Support\Facades\Facade;


class LaravelLogFacade extends Facade
{
    protected static function getFacadeAccessor() { return 'laravel_log'; }
}