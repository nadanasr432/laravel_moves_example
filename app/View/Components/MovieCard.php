<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class MovieCard extends Component
{
    public $movie;
   
    /**
     * Create a new component instance.
     */
    public function __construct($movie)
    {
        $this->movie=$movie;
      
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.movie-card');
    }
}
