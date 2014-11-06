<?php namespace App\Lexicon\Plugin;

use Anomaly\Lexicon\Plugin\Plugin;

/**
 * Class Navigation
 *
 * @package App\Lexicon\Plugin
 */
class Demo extends Plugin
{

    public function navigation()
    {
        return config('demo.navigation');
    }

    public function location()
    {
        if ($location = $this->getAttribute('view')) {
            $location = '/resources/views/example/'.$location.'.html';
        }
        return $location;
    }

} 