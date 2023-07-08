<?php

namespace App\Http\Livewire\Employee;

use App\Models\Business;
use App\Models\Businessteam;
use App\Models\Category;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Sector;
use App\Models\Social;
use App\Models\Speaker;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class EmployeeDashboardComponent extends Component
{
    public $edition;
    public $eventname;
    public $startdate;
    public $enddate;
    public $venue;
    public $city;
    public $organizer;
    public $email;
    public $phone;
    public $eventype;
    public $slug;
    public $image;
    public $extprice;
    public $stdprice;

    public $catgeory_id;
    public $sector_id;
    public $expo_id;
    public $search_id;

    public $option;

    use WithFileUploads;
    use WithPagination;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->eventname,'-');
    }
    
    public function mount()
    {
        $this->level = 3;
        $this->status = 1;
        $this->admstatus = 0;
    }

    public function delet($id)
    { 
      $user = Speaker::find($id);
        $user->delete();
      $users = Businessteam::find($user->businessteam_id);
        $users->delete();
      $userr = Social::find($user->social_id);
        $userr->delete();
      session()->flash('message','User  has been  deleted successfully');
    }

    public function updateSpeakerStatus($id, $status) 
    {
      $opTios = Speaker::find($id);
      $opTios->status = $status;
      $opTios->save();

      $opTio = Businessteam::find($opTios->businessteam_id);
      $opTio->status = $status;
      $opTio->save();

      $opTioo = Social::find($opTios->social_id);
      $opTioo->status = $status;
      $opTioo->save();

      session()->flash('message',' Status Successfully Changed');
    }


    public function newlist(){   
        $event = new Event();
        $event->eventname = $this->eventname;
        $event->slug = $this->slug;
        $event->enddate = $this->enddate;
        $event->startdate = $this->startdate;
        $event->venue = $this->venue;
        $event->city = $this->city;
        $event->image = $this->image;
        $event->edition  = $this->edition;
        $event->eventype = $this->eventype;
        $event->category_id = $this->category_id;
        $event->sector_id  = $this->sector_id;
        $event->expo_id = $this->expo_id;
        $event->search_id = $this->search_id;
        $event->level  = 3;
        $event->status  = 1;
        $event->admstatus  = 0;
        $event->save();
    }

    public function render()
    {
        $speaker = Speaker::where('user_id', Auth::user()->id)->orderBy('created_at','desc')->get();
        $abc = Expo::where('status', 1)->where('type','expo')->orderBy('expoindustry','asc')->get();
        $def = Expo::where('status', 1)->where('type','tag')->orderBy('tag','asc')->get();
        $ghi = Sector::get();
        $jkl = Category::get();
        return view('livewire.employee.employee-dashboard-component',['speaker' => $speaker,'abc' => $abc, 'jkl' => $jkl, 'ghi' => $ghi, 'def' => $def])->layout('layouts.exhibitor');
    }
}
