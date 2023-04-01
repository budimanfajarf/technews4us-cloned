<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TemplateHome extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'template-home',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'atf_section' => $this->atfSection(),
        ];
    }

    public function atfSection()
    {
        return get_field('atf_section');
    }
}
