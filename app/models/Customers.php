<?php

class Customers extends \Eloquent {
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