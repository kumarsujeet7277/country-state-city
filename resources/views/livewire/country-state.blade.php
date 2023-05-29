<div>
    <div class="container" style="padding: 5%">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Select Country, State & City
                            </div>
                        </div>
                    </div> 
                <div class="panel-body">
    <div class="form-group row">
        <label for="country" class="col-md-4 col-form-label text-md-right">Country Name</label>

        <div class="col-md-8">
            <select wire:model="selectedCountry" class="form-control">
                <option value="" selected>Choose country</option>
                @foreach($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    {{-- @if (!is_null($selectedCountry)) --}}
        <div class="form-group row">
            <label for="state" class="col-md-4 col-form-label text-md-right">State Name</label>

            <div class="col-md-8">
                <select wire:model="selectedState" class="form-control">
                    <option value="" selected>Choose state</option>
                    @foreach($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    {{-- @endif --}}
{{-- 
    @if (!is_null($selectedState)) --}}
        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-right">City Name</label>

            <div class="col-md-8">
                <select wire:model="selectedCity" class="form-control" name="city_id">
                    <option value="" selected>Choose city</option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    {{-- @endif --}}
            </div>                       
                </div>
            </div>
        </div>
    </div>
</div>
