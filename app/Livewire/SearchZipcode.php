<?php

namespace App\Livewire;

use App\Models\Address;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchZipcode extends Component
{
    public $zipcode = '';
    public $logradouro = '';
    public $bairro = '';
    public $localidade = '';
    public $uf = '';
    protected $rules = [
      'zipcode' => 'required',
      'logradouro' => 'required',
      'bairro' => 'required',
      'localidade' => 'required',
      'uf' => 'required|max:2',
  ];

    protected $messages = [
        'zipcode.required' => 'O campo CEP é obrigatório',
        'logradouro.required' => 'O campo Logradouro é obrigatório',
        'bairro.required' => 'O campo Bairro é obrigatório',
        'localidade.required' => 'O campo Localidade é obrigatório',
        'uf.required' => 'O campo UF é obrigatório',
        'uf.max' => 'O campo UF deve ter no máximo 2 caracteres',
    ];


    public function updatedZipcode($value)
    {
        $response = Http::withoutVerifying()->get("https://opencep.com/v1/{$value}")->json();
        if (isset($response['zipcode'])) {
            $this->zipcode = $response['zipcode'];
        }

        if (isset($response['logradouro'])) {
            $this->logradouro = $response['logradouro'];
        }

        if (isset($response['bairro'])) {
            $this->bairro = $response['bairro'];
        }

        if (isset($response['localidade'])) {
            $this->localidade = $response['localidade'];
        }

        if (isset($response['uf'])) {
            $this->uf = $response['uf'];
        }
    }

    public function save(Address $address)
    {
        $this->validate();
        $address->updateOrCreate(
            [
            'zipcode' => $this->zipcode, //não vai cadastrar de novo
          ],
            [
            'logradouro' => $this->logradouro, //pode cadastrar novamente
            'bairro' => $this->bairro,
            'localidade' => $this->localidade,
            'uf' => $this->uf,
          ]
        );

        $this->reset();
    }

    public function render()
    {
        return view('livewire.search-zipcode');
    }
}
