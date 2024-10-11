<?php

namespace App\View\Components\Contacts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Text extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $text
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contacts.text');
    }
}
