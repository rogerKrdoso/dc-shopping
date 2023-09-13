<?php

namespace App\View\Components\Site;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardPost extends Component
{
    public $image;
    public $name;
    public $date;
    public $description;
    public $link;


    public function __construct($image, $name, $date, $description, $link)
    {
        $this->image = $image;
        $this->name = $name;
        $this->date = $date;
        $this->description = $description;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.site.card-post');
    }
}
