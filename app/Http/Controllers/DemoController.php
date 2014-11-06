<?php namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;

class DemoController extends Controller {


    protected $layout = 'theme.layout';

    public function welcome()
    {
        $this->title('Welcome');

        return view('welcome');
    }

	public function simple()
	{
        $this->title('Simple Variables');

        $data = [
            'name' => 'Mr. Anderson'
        ];

        return $this->view('simple', $data);
	}

    public function looped()
    {
        $this->title('Looped Variables');

        $data = [
            'books' => [
                [
                    'title' => 'Laravel: From Apprentice to Artisan',
                    'author' => [
                        'name' => 'Taylor Otwell',
                    ]
                ],
                [
                    'title' => 'Laravel Testing Decoded',
                    'author' => [
                        'name' => 'Jeffrey Way',
                    ]
                ],
                [
                    'title' => 'Build APIs You Won\'t Hate',
                    'author' => [
                        'name' => 'Phil Sturgeon',
                    ]
                ],
            ]
        ];

        return $this->view('looped', $data);
    }

    public function layouts()
    {
        $this->title('Extending Layouts');

        return $this->view('extends');
    }


    public function recursive()
    {

    }




}
