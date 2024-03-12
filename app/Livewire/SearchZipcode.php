<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchZipcode extends Component
{
  public $zipcode = '';
  public $logradouro = '';
  public $complemento = '';
  public $bairro = '';
  public $localidade = '';
  public $uf = '';

  public function updatedZipcode($value)
  {
    dd($value);
  }
  public function mount()
  {
      // $response = Http::withoutVerifying()->get("https://opencep.com/v1/15050305")->json();
      // dd($response);
  }
    public function render()
    {
        return view('livewire.search-zipcode');
    }
}
