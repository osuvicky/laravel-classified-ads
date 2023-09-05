<div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label">Category<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <div class="custom-select">
                                                    <select wire:model="selectedCategory" name="category_id"
                                                    class="form-control">
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('category_id') <span class="error">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @if (!is_null($selectedCategory))
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label">Sub Category<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <div class="custom-select">
                                                    <select wire:model="selectedSubCategory" name="sub_category_id"
                                                    class="form-control">
                                                        @foreach ($subCategories as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('sub_category_id') <span class="error">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                        @endif

                                        @if (!is_null($selectedSubCategory))
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label">Child Category<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <div class="custom-select">
                                                    <select name="child_category_id"
                                                    class="form-control">
                                                        @foreach ($childCategories as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('child_category_id') <span class="error">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @endif
</div>
