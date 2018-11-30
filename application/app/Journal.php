<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $fillable = [
		'symbol',
		'issn',
		'print_issn',
		'e_issn',
		'collection_name',
		'acronym',
		'short_title',
		'title',
		'short_title_nlm',
		'publisher',
		'url_journal_page',
		'license',
	];

}
