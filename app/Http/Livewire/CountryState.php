<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

class CountryState extends Component
{
    public $countries;
    public $states;
    public $cities;

    public $selectedCountry = null;
    public $selectedState = null;
    public $selectedCity = null;

    public function mount($selectedCity = null)
    {
        $this->countries = Country::all();
        $this->states = collect();
        $this->cities = collect();
        $this->selectedCity = $selectedCity;

        if (!is_null($selectedCity)) {
            $city = City::with('state.country')->find($selectedCity);
            if ($city) {
                $this->cities = City::where('state_id', $city->state_id)->get();
                $this->states = State::where('country_id', $city->state->country_id)->get();
                $this->selectedCountry = $city->state->country_id;
                $this->selectedState = $city->state_id;
            }
        }
    }

    public function render()
    {
        return view('livewire.country-state');
    }

    public function updatedSelectedCountry($country)
    {
        $this->states = State::where('country_id', $country)->get();
        $this->selectedState = NULL;
    }

    public function updatedSelectedState($state)
    {
        if (!is_null($state)) {
            $this->cities = City::where('state_id', $state)->get();
        }
    }
}
