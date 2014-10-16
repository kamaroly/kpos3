<?php namespace App\Modules\Customers\Models;
/**
 * Kpos
 * 
 * An open source Point Of Sale
 *
 * @package       kpos3
 * @author        Kamaro Lambert
 * @copyright     Copyright (c) 2012 - 2014 Kpos, 
 * @license       http://www.kamaroly.com/license.txt
 * @link          http://www.kamaroly.com
 * 
 */
class Customer extends \Eloquent {
	protected $fillable = [
            'first_name',
            'last_name',
            'email',
            'phone',
            'history',
            'image',
            'custom_fields',
            'created_by',
            'modified_by'
            ];
}