<?php

namespace App\Livewire\Update;

use Livewire\Component;

class Idx extends Component
{
    public $newsId;
    public function render()
    {
        return view('livewire.update.idx');
    }

    public function mount($newsId){
        $this->newsId = $newsId;
    }
}
