<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
		'name',
		'journal_id'
	];

	public function journal()
    {
        return $this->belongsTo('App\Journal');
    }
}
