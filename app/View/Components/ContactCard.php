<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContactCard extends Component
{
    /*public $company;
    public $name;
    public $phone;
    public $phone_link;
    public $email;*/

    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $company = '',
        public ?string $name = '',
        public ?string $phone = '',
        public ?string $phoneLink = '',
        public ?string $email = '',
        public ?string $url = '',
        public ?string $type = ''
    )
    {
        $this->phoneLink = preg_replace('/[^0-9]/', '', $phone);

        if (!empty($this->phoneLink)) {
            $this->phoneLink = '+1' . $this->phoneLink;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contact-card');
    }
}
