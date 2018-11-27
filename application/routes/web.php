<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


use Spatie\ArrayToXml\ArrayToXml;
Route::get('/xml', function () {
	$array = [
	    'front' => [
	        'journal-meta' => [
	        	'journal-id' => [
	        		['_attributes' => ['journal-id-type' => 'nlm-ta'], '_value' => 'J Bras Pneumol'],
	        		['_attributes' => ['journal-id-type' => 'publisher-id'], '_value' => 'jbpneu']
	        	],
	        	'journal-title-group' => [
	        		'journal-title' => 'Jornal Brasileiro de Pneumologia',
	        		'abbrev-journal-title' => [
	        			'_attributes' => ['abbrev-type' => 'publisher'],
	        			'_value' => 'J. bras. pneumol.'
	        		]
	        	],
	        	'issn' => [
	        		['_attributes' => ['pub-type' => 'ppub'], '_value' => '1806-3713'],
	        		['_attributes' => ['pub-type' => 'epub'], '_value' => '1806-3756']
	        	],
	        	'publisher' => [
	        		'publisher-name' => 'Sociedade Brasileira de Pneumologia e Tisiologia'
	        	]
	        ],
	        'article-meta' => [
	        	'article-id' => [
	        		'_attributes' => ['pub-id-type' => 'doi'],
	        		'_value' => '10.1590/S1806-37562016000000295'
	        	],
	        	'article-categories' => [
	        		'subj-group' => [
	        			'_attributes' => ['subj-group-type' => 'heading'],
	        			'subject' => 'CONTINUING EDUCATION: IMAGING',
	        		]
	        	],
	        	'title-group' => [
	        		'article-title' => 'Multiple cavitated nodules',
	        	],
	        	'contrib-group' => [
	        		'contrib' => [
	        			[
	        				'_attributes' => ['contrib-type' => 'author'], 
	        				'name' => [
	        					'surname' => 'Marchiori',
	        					'given-names' => 'Edson'
	        				],
	        				'xref' => [
	        					'_attributes' => ['ref-type'=> 'aff', 'rid' => 'aff1'],
	        					'sup' => '1'
	        				]
	        			],
	        			[
	        				'_attributes' => ['contrib-type' => 'author'], 
	        				'name' => [
	        					'surname' => 'Hochhegger',
	        					'given-names' => 'Bruno'
	        				],
	        				'xref' => [
	        					[
	        						'_attributes' => ['ref-type'=> 'aff', 'rid' => 'aff2'],
	        						'sup' => '2'
	        					],
	        					[
	        						'_attributes' => ['ref-type'=> 'aff', 'rid' => 'aff3'],
	        						'sup' => '3'
	        					],
	        				]
	        			],
	        			[
	        				'_attributes' => ['contrib-type' => 'author'], 
	        				'name' => [
	        					'surname' => 'Zanetti',
	        					'given-names' => 'Gláucia'
	        				],
	        				'xref' => [
	        					'_attributes' => ['ref-type'=> 'aff', 'rid' => 'aff1'],
	        					'sup' => '1'
	        				]
	        			],
	        		]
	        	],
	        	'aff' => [
	        		[
	        			'_attributes' => ['id' => 'aff1'],
	        			'label' => '1',
	        			'institution' => [
	        				['_attributes' => ['content-type' => 'original'], '_value' => '. Universidade Federal do Rio de Janeiro, Rio de Janeiro (RJ) Brasil.'],
	        				['_attributes' => ['content-type' => 'normalized'], '_value' => 'Universidade Federal do Rio de Janeiro'],
	        				['_attributes' => ['content-type' => 'orgname'], '_value' => 'Universidade Federal do Rio de Janeiro'],
	        			],
	        			'addr-line' => [
	        				'named-content' => [
	        					['_attributes' => ['content-type' => 'city'], '_value' => 'Rio de Janeiro'],
	        					['_attributes' => ['content-type' => 'state'], '_value' => 'RJ'],
	        				]
	        			],
	        			'country' => [
	        				'_attributes' => ['country' => 'BR'],
	        				'_value' => 'Brazil'
	        			]
	        		],
	        		[
	        			'_attributes' => ['id' => 'aff2'],
	        			'label' => '2',
	        			'institution' => [
	        				['_attributes' => ['content-type' => 'original'], '_value' => '. Santa Casa de Misericórdia de Porto Alegre, Porto Alegre (RS) Brasil.'],
	        				['_attributes' => ['content-type' => 'normalized'], '_value' => 'Santa Casa de Misericórdia de Porto Alegre'],
	        				['_attributes' => ['content-type' => 'orgname'], '_value' => 'Santa Casa de Misericórdia de Porto Alegre'],
	        			],
	        			'addr-line' => [
	        				'named-content' => [
	        					['_attributes' => ['content-type' => 'city'], '_value' => 'Porto Alegre'],
	        					['_attributes' => ['content-type' => 'state'], '_value' => 'RS'],
	        				]
	        			],
	        			'country' => [
	        				'_attributes' => ['country' => 'BR'],
	        				'_value' => 'Brazil'
	        			]
	        		],
	        		[
	        			'_attributes' => ['id' => 'aff3'],
	        			'label' => '3',
	        			'institution' => [
	        				['_attributes' => ['content-type' => 'original'], '_value' => '. Universidade Federal de Ciências da Saúde de Porto Alegre, Porto Alegre (RS) Brasil.'],
	        				['_attributes' => ['content-type' => 'normalized'], '_value' => 'Universidade Federal de Ciências da Saúde de Porto Alegre'],
	        				['_attributes' => ['content-type' => 'orgname'], '_value' => 'Universidade Federal de Ciências da Saúde de Porto Alegre'],
	        			],
	        			'addr-line' => [
	        				'named-content' => [
	        					['_attributes' => ['content-type' => 'city'], '_value' => 'Porto Alegre'],
	        					['_attributes' => ['content-type' => 'state'], '_value' => 'RS'],
	        				]
	        			],
	        			'country' => [
	        				'_attributes' => ['country' => 'BR'],
	        				'_value' => 'Brazil'
	        			]
	        		],
	        	],
	        	'pub-date' => [
	        		'_attributes' => ['pub-type' => 'epub-ppub'],
	        		'season' => 'Mar-Apr',
	        		'year' => '2017'
	        	],
	        	'volume' => '43',
	        	'issue' => '02',
	        	'fpage' => '85',
	        	'lpage' => '85',
	        	'permissions' => [
	        		'license' => [
	        			'_attributes' => [
	        				'license-type' => 'open-access',
	        				'xlink:href' => 'http://creativecommons.org/licenses/by-nc/4.0/',
	        				'xml:lang' => 'en'
	        			],
	        			'license-p' => 'This is an open-access article distributed under the terms of the Creative Commons Attribution License',
	        		]
	        	],
	        	'counts' => [
	        		'fig-count' => ['_attributes' => ['count' => '2']],
	        		'table-count' => ['_attributes' => ['count' => '0']],
	        		'equation-count' => ['_attributes' => ['count' => '0']],
	        		'ref-count' => ['_attributes' => ['count' => '1']],
	        		'page-count' => ['_attributes' => ['count' => '1']],
	        	],
	        ],
	    ],
	    'body' => [
	    	'p' => [
	    		['_mixed' => 'A 24-year-old male patient, who was an injection cocaine user, presented with about a 10-day history of cough and fever. A CT scan (
	    			<xref ref-type="fig" rid="f1">Figure 1</xref>
	    		) showed multiple nodules, some of which were cavitated, with a predominant peripheral distribution.'],
	    		[
	    			'fig' => [
	    				'_attributes' => ['id' => 'f1'],
	    				'label' => 'Figure 1',
	    				'caption' => ['title' => 'CT scan with lung window settings at the level of the lung bases, showing multiple nodules of various sizes, many of which were cavitated, with a predominant peripheral distribution.'],
	    				'graphic' => ['_attributes' => ['xlink:href' => '1806-3713-jbpneu-43-02-00085-gf1.tif']]
	    			]
	    		],
	    		['The differential diagnosis of multiple cavitated nodules includes neoplastic diseases (metastases, lymphomas, etc.) and infectious diseases (septic embolism, granulomatous diseases, etc.), as well as other less frequent etiologies (nodular sarcoidosis, rheumatoid nodules, Wegener\'s granulomatosis, nodular amyloidosis, etc.).'],
	    		['The most common causes are cavitated metastases and septic embolism. The frequency of cavitation in metastatic nodules is much lower than is that observed in primary tumors. Squamous cell carcinomas are the tumors that most commonly cause cavitated metastases, accounting on average for 70% of such cases. Tumors of the head, neck, reproductive system, and large intestine are the most common primary sites, although any primitive tumor can in principle cause cavitated metastases. In metastases, cavitations originate both from tumor necrosis and from the formation of a check-valve mechanism, because of neoplastic infiltration into the distal airways. The cavitation walls are more frequently thick and irregular, but they can also be thin, similar to cysts.'],
	    		['Septic embolism is caused by embolization of microorganism-infected fragments to the lungs. The disease is most commonly secondary to right-sided endocarditis or to septic thrombophlebitis, but it can occur secondary to the use of infected intravascular catheters, to suppurative processes of the skin, head or neck, or to contamination related to intravenous drug use. CT findings consist of multiple, predominantly peripheral, bilateral, well- or ill-defined nodules exhibiting varying degrees of cavitation. Findings of associated peripheral triangles frequently correspond to infarction due to vascular occlusion. Septic embolism can be accompanied by unilateral or bilateral pleural effusion.'],
	    		['_mixed' => 'Clinical signs are very important for differential diagnosis. The presence of a known primary tumor should raise the suspicion of lung metastases. Patients with metastases are frequently asymptomatic from a pulmonary standpoint. Septic embolism is clinically characterized by fever, dyspnea, cough, and pleuritic pain. Blood culture can be positive. Laboratory tests can be key to diagnosing rheumatoid nodules or Wegener\'s granulomatosis. The patient in the case reported here had clinical signs of an infectious process, and blood culture was positive for <italic>Streptococcus viridans</italic> . The final diagnosis was septic embolism secondary to intravenous drug use.'],
	    	],
	    ],
	    'back' => [
	    	'ref-list' => [
	    		'title' => 'RECOMMENDED READING',
	    		'ref' => [
	    			'_attributes' => ['id' => 'B1'],
	    			'label' => '1',
	    			'mixed-citation' => 'Fraser RS, Müller NL, Colman NC, Pare PD, editors. Diagnosis of Diseases of the Chest. 4th ed. Philadelphia: WB Saunders Company; 1999.',
	    			'element-citation' => [
	    				'_attributes' => ['publication-type' => 'book'],
	    				'person-group' => [
	    					'_attributes' => ['person-group-type' => 'author'],
	    					'name' => [
	    						['surname' => 'Fraser', 'given-names' => 'RS'],
	    						['surname' => 'Müller', 'given-names' => 'NL'],
	    						['surname' => 'Colman', 'given-names' => 'NC'],
	    						['surname' => 'Pare', 'given-names' => 'PD'],
	    					]
	    				],
	    				'source' => 'Diagnosis of Diseases of the Chest',
	    				'year' => '1999',
	    				'edition' => '4',
	    				'publisher-loc' => 'Philadelphia',
	    				'publisher-name' => 'WB Saunders Company',
	    			]
	    		],
	    	]
	    ],
	    'sub-article' => [
	    	'_attributes' => [
	    		'article-type' => 'translation',
	    		'id' => 's1',
	    		'xml:lang' => 'pt',
	    	],
	    	'front-stub' => [		        	
	        	'article-categories' => [
	        		'subj-group' => [
	        			'_attributes' => ['subj-group-type' => 'heading'],
	        			'subject' => 'EDUCAÇÃO CONTINUADA: IMAGENS',
	        		]
	        	],
	        	'title-group' => [
	        		'article-title' => 'Nódulos múltiplos escavados',
	        	],
	        	'contrib-group' => [
	        		'contrib' => [
	        			[
	        				'_attributes' => ['contrib-type' => 'author'], 
	        				'name' => [
	        					'surname' => 'Marchiori',
	        					'given-names' => 'Edson'
	        				],
	        				'xref' => [
	        					'_attributes' => ['ref-type'=> 'aff', 'rid' => 'aff01'],
	        					'sup' => '1'
	        				]
	        			],
	        			[
	        				'_attributes' => ['contrib-type' => 'author'], 
	        				'name' => [
	        					'surname' => 'Hochhegger',
	        					'given-names' => 'Bruno'
	        				],
	        				'xref' => [
	        					[
	        						'_attributes' => ['ref-type'=> 'aff', 'rid' => 'aff02'],
	        						'sup' => '2'
	        					],
	        					[
	        						'_attributes' => ['ref-type'=> 'aff', 'rid' => 'aff03'],
	        						'sup' => '3'
	        					],
	        				]
	        			],
	        			[
	        				'_attributes' => ['contrib-type' => 'author'], 
	        				'name' => [
	        					'surname' => 'Zanetti',
	        					'given-names' => 'Gláucia'
	        				],
	        				'xref' => [
	        					'_attributes' => ['ref-type'=> 'aff', 'rid' => 'aff01'],
	        					'sup' => '1'
	        				]
	        			],
	        		]
	        	],
	        	'aff' => [
	        		[
	        			'_attributes' => ['id' => 'aff01'],
	        			'label' => '1',
	        			'institution' => [
	        				['_attributes' => ['content-type' => 'original'], '_value' => '. Universidade Federal do Rio de Janeiro, Rio de Janeiro (RJ) Brasil.'],
	        			],
	        		],
	        		[
	        			'_attributes' => ['id' => 'aff02'],
	        			'label' => '2',
	        			'institution' => [
	        				['_attributes' => ['content-type' => 'original'], '_value' => '. Santa Casa de Misericórdia de Porto Alegre, Porto Alegre (RS) Brasil.'],
	        			],
	        		],
	        		[
	        			'_attributes' => ['id' => 'aff03'],
	        			'label' => '3',
	        			'institution' => [
	        				['_attributes' => ['content-type' => 'original'], '_value' => '. Universidade Federal de Ciências da Saúde de Porto Alegre, Porto Alegre (RS) Brasil.'],
	        			],
	        		],
	        	],
		    ],
	    	'body' => [
	    		'p' => [
	    			['_mixed' => 'Paciente masculino, 24 anos, usuário de cocaína injetável, relatando tosse e febre há cerca de 10 dias. A TC (<xref ref-type="fig" rid="f01">Figura 1</xref>) mostrava múltiplos nódulos, alguns deles escavados, com distribuição predominantemente periférica.'],
	    			[
		    			'fig' => [
		    				'_attributes' => ['id' => 'f01'],
		    				'label' => 'Figura 1',
		    				'caption' => ['title' => 'TC com janela para o pulmão, ao nível das bases pulmonares, mostrando múltiplos nódulos de tamanhos variados, muitos deles escavados, com distribuição predominantemente periférica.'],
		    				'graphic' => ['_attributes' => ['xlink:href' => '1806-3713-jbpneu-43-02-00085-gf1-pt.tif']]
		    			]
		    		],
		    		['O diagnóstico diferencial de nódulos escavados múltiplos inclui doenças neoplásicas (metástases, linfomas, etc.) e doenças infecciosas (embolia séptica, doenças granulomatosas, etc.), além de outras etiologias menos frequentes (sarcoidose nodular, nódulos reumatoides, granulomatose de Wegener, amiloidose nodular, entre outras).'],
		    		['As causas mais comuns são as metástases escavadas e a embolia séptica. A frequência de escavação em nódulos metastáticos é muito menor do que a observada nos tumores primários. Os carcinomas de células escamosas são os tumores que mais comumente causam metástases escavadas, correspondendo, em média, a 70% dessas. Tumores de cabeça, pescoço, aparelho reprodutor e intestino grosso são os sítios primários mais comuns, embora qualquer tumor primitivo, a princípio, possa originar metástases escavadas. Nas metástases, as escavações se originam tanto de necrose tumoral como da formação de mecanismo valvular, devido à infiltração neoplásica para o interior de vias aéreas distais. As paredes das escavações mais frequentemente são espessas e irregulares, mas podem também ser finas, semelhantes a cistos.'],
		    		['A embolia séptica ocorre por embolização de fragmentos infectados com microorganismos para os pulmões. A doença mais comumente é secundária à endocardite direita ou à tromboflebite séptica, mas pode ocorrer secundariamente ao uso de cateteres endovasculares infectados, a processos supurativos de pele, cabeça ou pescoço, ou à contaminação relacionada ao uso de drogas endovenosas. O aspecto tomográfico é de múltiplos nódulos bilaterais, bem ou mal definidos, predominantemente periféricos, mostrando graus variados de escavação. Imagens triangulares periféricas associadas frequentemente correspondem a infartos por oclusão vascular. A embolia séptica pode cursar com derrame pleural uni ou bilateral.'],
		    		['_mixed' => 'Os aspectos clínicos são muito importantes para o diagnóstico diferencial. A presença de tumor primário previamente conhecido pode direcionar para a suspeita de metástases pulmonares. Frequentemente, pacientes com metástases são assintomáticos do ponto de vista pulmonar. A embolia séptica clinicamente cursa com febre, dispneia, tosse e dor pleurítica. A hemocultura pode ser positiva. Exames laboratoriais podem ser fundamentais para o diagnóstico de nódulos reumatoides ou de granulomatose de Wegener. O paciente do caso aqui descrito apresentava aspectos clínicos de processo infeccioso, e a hemocultura foi positiva para <italic>Streptococcus viridans</italic> . O diagnóstico final foi de embolia séptica secundária ao uso de drogas endovenosas.']
	    		],
	    	],
	    ],
	];

	$root = [
	    'rootElementName' => 'article',
	    '_attributes' => [
	        'article-type' => 'other',
	        'dtd-version' => '1.0',
	        'specific-use' => 'sps-1.8',
	        'xml:lang' => 'en',
	        'xmlns:mml' => 'http://www.w3.org/1998/Math/MathML',
	        'xmlns:xlink' => 'http://www.w3.org/1999/xlink'
	    ],
	];

	$result = new ArrayToXml($array, $root);
	$domDocument = $result->toDom();
	$implementation = new DOMImplementation();
	$dtd = $implementation->createDocumentType('article',
	        '-//NLM//DTD JATS (Z39.96) Journal Publishing DTD v1.0 20120330//EN',
	        'JATS-journalpublishing1.dtd');
	$domDocument->insertBefore($dtd, $domDocument->documentElement);
    return response($domDocument->saveXML(), 200)
                  ->header('Content-Type', 'text/xml');
});

