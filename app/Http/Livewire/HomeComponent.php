<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class HomeComponent extends Component
{
    public $name;
    public $gobol;
    public $phone;
    public $message;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=>'required',
            'gobol'=>'required',
            'phone'=>'required',
            'message'=>'required'
        ]);
    }
    public function ContactUs(){
        $this->validate([
            'name'=>'required',
            'gobol'=>'required',
            'phone'=>'required',
            'message'=>'required'
        ]);
        $contact = new Contact();
        $contact->name = $this->name;
        $contact->gobol = $this->gobol;
        $contact->phone = $this->phone;
        $contact->message = $this->message;
        $contact->save();
        session()->flash('message','Waad ku mahadsantahy sida fiican add noola soo xirirtay!');
    }
    public function render()
    {
        return view('livewire.home-component')->layout('layouts.base');
    }
}
