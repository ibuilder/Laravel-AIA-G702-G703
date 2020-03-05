<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    protected $number = 0;
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
      Blade::directive('convert', function ($money) {
        return "<?php echo  number_format($money,2, '.', ',');  ?>";
        });

        Blade::directive('convertp', function ($money) {
            return "<?php echo  number_format($money,2, '.','');  ?>";
            });

      Blade::directive('stringconfirm', function ($str) {
        return "<?php echo  strlen($str);  ?>";
        });

        Blade::directive('converttext', function ($text) {
        return "<?php echo  nl2br($text);  ?>";


  });



    }
}
