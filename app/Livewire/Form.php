<?php
 
namespace App\Livewire;
 
use Livewire\Component;
use App\Models\Tamu;
 
class Form extends Component
{
    public $name = '';
    public $no = '';
    public $alamat= '';
    public $gender= '';
 
    public function save()
    {
        $this->validate([
            'name' => 'required',
            'no' => 'required',
            'alamat' => 'required',
            'gender' => 'required|in:laki-laki,perempuan',
        ]);

        Tamu::create([
            'name' => $this->name,
            'no' => $this->no,
            'alamat' => $this->alamat,
            'gender' => $this->gender,
        ]);

 
        $this->reset(['name', 'no', 'alamat', 'gender']);

        session()->flash('message', 'Guest successfully added.');
 
        return $this->redirect('/');
    }
 
    public function render()
    {
        return view('livewire.form');
    }
}
