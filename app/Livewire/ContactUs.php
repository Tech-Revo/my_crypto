<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class ContactUs extends Component
{
    #[Validate('required')]
    public $name;

    #[Validate('exists:users,id_number')]
    public $id_number;

    #[Validate(['required','email'])]
    public $email;

    #[Validate('required')]
    public $message;

    protected $messages = [
        'id_number.exists' => 'The provided ID number does not exist.',
    ];
    
    public function render()
    {
        return view('livewire.contact-us');
    }
}