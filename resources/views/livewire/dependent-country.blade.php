<div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label">Country<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <div class="custom-select">
                                                        <select wire:model="selectedCountry" class="form-control" name="country_id">
                                                            @foreach ($countries as $country)
                                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @if (!is_null($selectedCountry))
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label">State<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <div class="custom-select">
                                                        <select wire:model="selectedState" class="form-control" name="state_id">
                                                            @foreach ($states as $state)
                                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                        @endif

                                        @if (!is_null($selectedState))
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label">City<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <div class="custom-select">
                                                        <select id="category-name" class="form-control" name="city_id">
                                                            @foreach ($cities as $city)
                                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @endif
</div>
