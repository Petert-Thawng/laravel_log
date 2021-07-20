Laravel Log Viewer
## Install

Via Composer

``` bash
$ composer require petertzht/laravel-log
```

## Usage
add to config/app.php 
``` 
'providers' => [
   Peter\LaravelLog\LaravelLogServiceProvider::class,
]
```

## Examples
```php
Step 1. Create Route with name 'logs'
Step 2. Create Controller 
In Controller 
use Peter\LaravelLog\Facade\LaravelLogFacade as Log;
 public function index(Request $request)
    {

        $data = Log::log($request->date);
        if($request->date){
            $date = $request->date;
        }else{
            $date = Carbon::now();
        }
       return view('log.laravel-log',compact('date','data'));
    }
Step 3. Run php artisan vendor:publish and choose laravel-log Tag
Cheers

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

