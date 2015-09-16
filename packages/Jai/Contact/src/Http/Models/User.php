<?php namespace jai\Contact\Http\Models;


use Moloquent;
class User extends Moloquent {

	protected $connection = 'mongodb';
	protected $collection = 'user';

}