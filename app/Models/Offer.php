<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
	protected $fillable = [
		'offer_id',
		'name',
		'image',
		'status',
		'url',
		'options',
		'offer_type',
		'sort'
	];
}
