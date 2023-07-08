<?php

namespace App\Http\Livewire\Employee;

use App\Models\Event;
use App\Models\Speaker;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EmployeeTopComponent extends Component
{
    public function render()
    {
        $event = Event::get();
        $total_event = Event::where('user_id' , Auth::user()->id)->get();
        $total_entrants = Speaker::where('user_id' , Auth::user()->id)->get();
        return view('livewire.employee.employee-top-component',['event' => $event,'total_event' => $total_event,'total_entrants' => $total_entrants]);
    }
}
