<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tamu;

class Form extends Component
{
    public $name = '';
    public $no = '';
    public $alamat = '';
    public $gender = '';
    public $feedback = '';  // Tambahkan ini

    public function save()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'no' => 'required',
            'alamat' => 'required',
            'gender' => 'required|in:laki-laki,perempuan',
            'feedback' => 'nullable',  // Tambahkan ini
        ]);

        Tamu::create($validatedData);

        $this->reset(['name', 'no', 'alamat', 'gender', 'feedback']);  // Tambahkan 'feedback' di sini

        session()->flash('message', 'Guest successfully added.');

        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.form');
    }
}