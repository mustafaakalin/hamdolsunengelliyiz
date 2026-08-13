<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class LiveDatetimeCounter extends Component
{
    public $endOfMonth;
    public $today;




    public function mount()
    {

        $today = Carbon::now();
        $this->today = $today->format('Y-m-d H:i:s');
        $this->endOfMonth = $today->copy()->endOfMonth()->format('Y-m-d H:i:s');
    }










    public function render()
    {
        return view('livewire.live-datetime-counter');
    }
}
