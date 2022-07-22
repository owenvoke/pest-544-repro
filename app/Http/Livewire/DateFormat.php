<?php

namespace App\Http\Livewire;

use App\Models\DateFormattedModel;
use Livewire\Component;

class DateFormat extends Component
{
    public DateFormattedModel $model;

    public function doNothing()
    {
        // literally doing nothing
    }

    public function render()
    {
        return view('livewire.date-format');
    }
}
