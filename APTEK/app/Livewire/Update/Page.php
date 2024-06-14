<?php

namespace App\Livewire\Update;

use Livewire\Component;
use App\Models\_News;
class Page extends Component
{
    public $title;
    public $short;
    public $long;
    public function render()
    {
        return view('livewire.update.page');
    }

    public function mount($newsId){
        dd($newsId);
        /*
        $news = _News
        $this->title=
        $this->short=
        $this->long=
        */
    }
}
