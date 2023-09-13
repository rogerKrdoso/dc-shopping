<?php

namespace App\View\Components\Site;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardsLojas extends Component
{
    
    public $image;
    public $title;
    public $description;
    public $link;

    public function __construct($image, $title, $description, $link)
    {
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.site.cards-lojas');
    }
}
