<?php

namespace App\Livewire;

use Livewire\Component;

class CityStateSelector extends Component
{
    public $product;
    public $states;
    public $states_cities;
    public $selected_state;
    public $cities;

    public function mount()
    {
        $this->states = json_decode(file_get_contents(public_path('states.json')), true);
        $this->states_cities = json_decode(file_get_contents(public_path('states-cities.json')), true);
    }

    public function render()
    {
        return view('livewire.city-state-selector');
    }

    public function selectState($state)
    {
        if (!in_array($state, ['Kuala Lumpur', 'Labuan', 'Putrajaya'])) {
            $this->selected_state = $state;
            $this->cities = $this->states_cities[$state];
        } else {
            $this->cities = [];
        }
    }
}
