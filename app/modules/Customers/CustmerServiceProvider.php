<?php namespace App\Modules\Customers;

use App\Modules\ModulesServiceProvider;
 
class CustmerServiceProvider extends ModulesServiceProvider {
 
    public function register()
    {
        parent::register('Customers');
    }
 
    public function boot()
    {
        parent::boot('Customers');
    }
 
}
