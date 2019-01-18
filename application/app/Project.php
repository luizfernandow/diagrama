<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
		'name',
		'journal_id',
		'article_type'
	];

	public static $articleTypes = [
        'article-commentary' => 'Comentários',
		'book-review' => 'Resenha',
		'brief-report' => 'Comunicação breve',
		'case-report' => 'Relato, descrição ou estudo de caso',
		'correction' => 'Errata',
		'editorial' => 'Editorial',
		'in-brief' => 'Press release',
		'letter' => 'Cartas',
		'other' => 'Outro tipo de documento',
		'partial-retraction' => 'Retratação ou recusa de parte de materiais já publicados',
		'rapid-communication' => 'Comunicação breve',
		'reply' => 'Resposta (a carta ou comentário)',
		'research-article' => 'Artigo original',
		'retraction' => 'Retratação (de um artigo científico)',
		'review-article' => 'Revisões de literatura '
    ];

	public function journal()
    {
        return $this->belongsTo('App\Journal');
    }
}


