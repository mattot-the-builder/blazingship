<?php

namespace App\Livewire;

use Livewire\Component;

class ImagePreview extends Component
{
    public $image;

    public function render()
    {
        return view('livewire.image-preview');
    }
}
