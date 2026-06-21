<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class UploadId extends Component
{
    use WithFileUploads;

    public $isIdUploaded = false;
    public $file;
    
    protected $rules = [
        'file' => 'required|image|max:1024', // 1MB Max
    ];
    
    protected $message = [
        'file.image' => 'Image not valid. Upload a valid image file.',
        'file.max' => 'Image size must be less that 1MB.'
    ];

    public function render()
    {
        return view('livewire.upload-id');
    }

    public function upload()
    {
        $this->validate();
        
        if (!$this->file) {
            session()->flash('error', 'Please select a file to upload.');
            return;
        }
        // dd('file uploading.....');

        $user = User::find(Auth::user()->id);
        $user->kyc = $this->file->store('kyc', 'public');
        $user->isKycUploaded = 'true';
        $user->save();

        $this->isIdUploaded = true;
        session()->flash('message', 'Your ID has been successfully uploaded.');
    }
}
