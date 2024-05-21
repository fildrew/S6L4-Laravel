<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;

class WorkingProjects extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public array $userProjects){}

    public function excerpt($string, $limit){
        return Str::limit($string, $limit, '...');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.working-projects');
    }
}
