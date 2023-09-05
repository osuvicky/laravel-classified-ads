<div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label">Country<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <div class="custom-select">
        <select wire:model="selectedCountry" name="country_id"
        class="select2">
            @foreach ($countries as $country)
                <option value="{{ $country->id }}">
                    {{ $country->name }}</option>
            @endforeach
        </select>
        </div>
                                                </div>
                                            </div>
                                        </div>
                                        @error('country_id')
                                        <div class="notification error closeable">
				                        <p>{{$message}}</p><a class="close" href="#"></a></div>
                                        @enderror
    @if (!is_null($selectedCountry))
    <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label">Country<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <div class="custom-select">
            <select wire:model="selectedState" name="state_id"
            class="select2">
                @foreach ($states as $state)
                    <option value="{{ $state->id }}">
                        {{ $state->name }}</option>
                @endforeach
            </select>
            </div>
                                                </div>
                                            </div>
                                        </div>
                                        @error('state_id')
                                        <div class="notification error closeable">
				                        <p>{{$message}}</p><a class="close" href="#"></a></div>
                                        @enderror
    @endif
    @if (!is_null($selectedState))
    <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label">Country<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <div class="custom-select">
            <select name="city_id"
            class="select2">
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}">
                        {{ $city->name }}</option>
                @endforeach
            </select>
            </div>
                                                </div>
                                            </div>
                                        </div>
                                        @error('city_id')
                                        <div class="notification error closeable">
				                        <p>{{$message}}</p><a class="close" href="#"></a></div>
                                        @enderror
    @endif


