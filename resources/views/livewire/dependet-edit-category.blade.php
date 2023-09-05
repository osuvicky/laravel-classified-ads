
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label">Category<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <div class="custom-select">
        <select wire:model="selectedCategory" name="category_id"
        class="select2">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}</option>
            @endforeach
        </select>
        </div>
                                                </div>
                                            </div>
                                        </div>
                                        @error('category_id')
                                        <div class="notification error closeable">
				                        <p>{{$message}}</p><a class="close" href="#"></a></div>
                                        @enderror
    @if (!is_null($selectedCategory))
    <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label">Sub Category<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <div class="custom-select">
            <select wire:model="selectedSubCategory" name="sub_category_id"
            class="select2">
                @foreach ($subCategories as $sub_category)
                    <option value="{{ $sub_category->id }}">
                        {{ $sub_category->name }}</option>
                @endforeach
            </select>
            </div>
                                                </div>
                                            </div>
                                        </div>
                                        @error('sub_category_id')
                                        <div class="notification error closeable">
				                        <p>{{$message}}</p><a class="close" href="#"></a></div>
                                        @enderror
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
            class="select2">
                @foreach ($childCategories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}</option>
                @endforeach
            </select>
            </div>
                                                </div>
                                            </div>
                                        </div>
                                        @error('child_category_id')
                                        <div class="notification error closeable">
				                        <p>{{$message}}</p><a class="close" href="#"></a></div>
                                        @enderror
    @endif


