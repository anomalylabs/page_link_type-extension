<?php

use Illuminate\Database\Schema\Blueprint;
use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyExtensionPageLinkTypeCreatePageLinksStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'pages',
        'title_column' => 'title',
        'locked'       => true
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'title' => [
            'required' => true
        ],
        'page'   => [
            'required' => true
        ],
        'description'
    ];

}
