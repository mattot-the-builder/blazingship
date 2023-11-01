<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class ProfileSetting extends Component
{
    public $isProfileUpdated = null;
    public $isPasswordUpdated = null;
    public $name;
    public $email;
    public $current_password;
    public $new_password;
    public $message;

    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
    }

    public function render()
    {
        return view('livewire.profile-setting');
    }

    public function updateProfile()
    {
        $user = auth()->user();
        $user->name = $this->name;
        $user->email = $this->email;
        if ($user->save()) {
            $this->message = '<span class="text-green-600 text-sm ml-6">Profile updated.</span>';
        } else {
            $this->message = '<span class="text-red-600 text-sm ml-6">Password failed to update.</span>';
        }
    }

    public function updatePassword()
    {
        $user = auth()->user();
        if (Hash::check($this->current_password, $user->password)) {
            $user->password = Hash::make($this->new_password);
            if ($user->save()) {
                $this->message = '<span class="text-green-600 text-sm ml-6">Password updated.</span>';
            } else {
                $this->message = '<span class="text-red-600 text-sm ml-6">Password failed to update.</span>';
            }
        } else {
            $this->message = '<span class="text-red-600 text-sm ml-6">Password failed to update.</span>';
        }

    }
}
