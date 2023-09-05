<div class="row">
<div class="col-sm-3 col-12">
                                                <label class="control-label" for="add-title">Upload Images<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <ul class="picture-upload">
                                                        <li>
                                                        <div class="col-span-6 md:col-span-3">
                                                            
                                                            <div class="mt-1 flex items-center">
                                                            <label class="block text-sm font-medium text-gray-700">
                                                                Featured Image
                                                            </label>
                @if ($oldFeaturedImage)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        Old Featured Image:
                        <img class="img-fluid" src="{{ Storage::url($oldFeaturedImage) }}">
                    </div>
                @endif
                @if ($featuredImage)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        New Featured Image:
                        <img class="img-fluid" src="{{ $featuredImage->temporaryUrl() }}">
                    </div>
                @endif
           

            <input wire:model="featuredImage" type="file" id="featured_image" name="featured_image"
                class="form-control" />
                @error('featured_image') <span class="error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        </li>
                                                        <li>
                                                        <div class="col-span-6 md:col-span-3">
                                                            
                                                            <div class="mt-1 flex items-center">
                                                            <label class="block text-sm font-medium text-gray-700">
                                                                Image One
                                                            </label>
                @if ($oldImageOne)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        Old Image One:
                        <img class="img-fluid" src="{{ Storage::url($oldImageOne) }}">
                    </div>
                @endif
                @if ($imageOne)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        New Image One:
                        <img class="img-fluid" src="{{ $imageOne->temporaryUrl() }}">
                    </div>
                @endif
            <!-- </div> -->
            <input wire:model="imageOne" type="file" id="image_one" name="image_one"
                class="form-control" />
                @error('image_one') <span class="error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        </li>
                                                        <li>
                                                        <div class="col-span-6 md:col-span-3">
                                                            
                                                            <div class="mt-1 flex items-center">
                                                            <label class="block text-sm font-medium text-gray-700">
                                                                Image Two
                                                            </label>
                @if ($oldImageTwo)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        Old Image Two:
                        <img class="img-fluid" src="{{ Storage::url($oldImageTwo) }}">
                    </div>
                @endif
                @if ($imageTwo)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        New Image Two:
                        <img class="img-fluid" src="{{ $imageTwo->temporaryUrl() }}">
                    </div>
                @endif
            <!-- </div> -->
            <input wire:model="imageTwo" type="file" id="image_two" name="image_two"
                class="form-control" />
                @error('image_two') <span class="error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        </li>
                                                        <li>
                                                        <div class="col-span-6 md:col-span-3">
                                                            
                                                            <div class="mt-1 flex items-center">
                                                            <label class="block text-sm font-medium text-gray-700">
                                                                Image Three
                                                            </label>
                @if ($oldImageThree)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        Old Featured Image:
                        <img class="img-fluid" src="{{ Storage::url($oldImageThree) }}">
                    </div>
                @endif
                @if ($imageThree)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        New Featured Image:
                        <img class="img-fluid" src="{{ $imageThree->temporaryUrl() }}">
                    </div>
                @endif
            </div>
            <input wire:model="imageThree" type="file" id="image_three" name="image_three"
                class="form-control" />
                @error('image_three') <span class="error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
      
                                        