<?php

namespace App\View\Components\Site;

use Closure;
use Faker\Guesser\Name;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardTheme extends Component
{
    
    public $image;
    public $name;
    public $number;
    public $category;
    public $wpp;
    public $expediente;

    public function __construct($image, $name, $number, $category, $wpp, $expediente)
    {
        $this->image = $image;
        $this->name = $name;
        $this->number = $number;
        $this->category = $category;
        $this->wpp = $wpp;
        $this->expediente = $expediente;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.site.card-theme');
    }
}
