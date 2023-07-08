<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;
use Illuminate\Support\Str;

class EventFormComponent extends Component
{
    public $eventname;
    public $startdate;
    public $enddate;
    public $venue;
    public $city;
    public $organizer;
    public $email;
    public $phone;
    public $eventype;
    public $slug, $edition, $level, $status, $admstatus;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->eventname,'-');
    }
    
    public function mount()
    {
        $this->edition = 'request';
        $this->organizer = "lead";
        $this->level = 3;
        $this->status = 1;
        $this->admstatus = 0;
    }

    public function newlist(){   
        $event = new Event();
        $event->eventname = $this->eventname;
        $event->slug = $this->slug;
        $event->enddate = $this->enddate;
        $event->startdate = $this->startdate;
        $event->venue = $this->venue;
        $event->city = $this->city;
        $event->organizer = "lead";
        $event->email = $this->email;
        $event->phone = $this->phone;
        //$event->image = null;
        $event->edition  = $this->edition;
        $event->eventype = $this->eventype;
        $event->level  = $this->level;
        $event->status  = 1;
        $event->admstatus  = 0;
        $event->save();
        //$this-> sendEmail($event->email);
        $this->reset();
        session()->flash('message','You got it! <br> We have received your request and will call you back within 24 hours. <br>If you are unable to pick up or you have chnaged your mind, please email us at team@theexhibition.space'); 
        return back()->withinput();
    }

    public function render()
    {
        return view('livewire.event-form-component');
    }
}
