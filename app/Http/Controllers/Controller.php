<?php namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{

    use ValidatesRequests;

    /**
     * @var Factory
     */
    private $factory;

    public function __construct(Factory $factory)
    {
        $this->factory = $factory;
    }

    protected function view($view, $data = [])
    {
        return view(
            'theme.layout.example',
            [
                'location' => $view,
                'data'     => view('data.' . $view),
                'example'  => view('example.' . $view, $data),
                'template' => $this->getTemplate($view)
            ]
        );
    }

    protected function getTemplate($view)
    {
        $view = str_replace('.', '/', $view);
        return file_get_contents(base_path('resources/views/example/' . $view . '.html'));
    }

    protected function title($title)
    {
        $this->factory->share('title', $title);
    }

}
