<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormMail;

class ContactForm extends Component
{
    public $name = '';
    public $phone = '';
    public $email = '';
    public $message = '';

    public $successMessage = '';
    public $errorMessage = '';

    protected $rules = [
        'name' => 'required|min:2|max:255',
        'phone' => 'nullable|string|max:20',
        'email' => 'required|email|max:255',
        'message' => 'required|min:10|max:5000',
    ];

    protected $messages = [
        'name.required' => 'Name is required.',
        'name.min' => 'Name must be at least 2 characters.',
        'email.required' => 'Email is required.',
        'email.email' => 'Please enter a valid email address.',
        'message.required' => 'Message is required.',
        'message.min' => 'Message must be at least 10 characters.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        try {
            // Send email
            Mail::to('support@atlascapt.com')->send(new ContactFormMail([
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
                'message' => $this->message,
            ]));

            $this->successMessage = 'Thank you for contacting us! We will get back to you soon.';
            $this->errorMessage = '';

            // Reset form
            $this->reset(['name', 'phone', 'email', 'message']);
        } catch (\Exception $e) {
            $this->errorMessage = 'Sorry, there was an error sending your message. Please try again later.';
            $this->successMessage = '';

            // Log the error for debugging
            Log::error('Contact form error: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
