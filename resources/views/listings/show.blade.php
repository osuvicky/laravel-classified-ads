@extends('layouts.main-layout')
@section('content')
@livewireStyles

<x-search />
        <!-- Post Ad Page Start Here -->
        <section class="s-space-bottom-full bg-accent-shadow-body">
            <div class="container">
                <div class="breadcrumbs-area">
                    <ul>
                        <li><a href="/">Home</a> -</li>
                        <li class="active">Show Ad</li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                        <x-user_side />
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 col-12 mb--sm">
                        <div class="gradient-wrapper">
                            <div class="gradient-title">
                                <h2>View Ad</h2>
                            </div>
                            <div class="input-layout1 gradient-padding post-ad-page">
                                <form action="{{ route('listings.update', $listing->id) }}"  method="POST" enctype="multipart/form-data" id="post-add-form">
                                    @csrf
                                    <div class="border-bottom-2 mb-50 pb-30">
                                        <div class="section-title-left-dark border-bottom d-flex">
                                            <h3><img src="{{asset('')}}dashboard_assets/img/post-add1.png" alt="post-add" class="img-fluid"> Ads Information</h3>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="add-title">Title <span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="text" id="add-title" class="form-control" placeholder="Ads Title" name="title" value="{{ $listing->title }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        @error('title')
                                        <div class="notification error closeable">
				                        <p>{{$message}}</p><a class="close" href="#"></a></div>
                                        @enderror

                                        @livewire('dependet-edit-category', ['category' => $listing->category_id, 'subCategory' => $listing->sub_category_id, 'childCategory' => $listing->child_category_id])

                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="add-title">Location<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="text" id="add-title" class="form-control" placeholder="Location" name="location" value="{{ $listing->location }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label">Condition<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <div class="custom-select">
                                                        <select id="category-name" class='select2' name="condition" readonly>
                                                            <option value="new" {{ $listing->condition == 'new' ? 'selected' : '' }}>New</option>
                                                            <option value="used" {{ $listing->condition == 'used' ? 'selected' : '' }}>Used</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @error('condition')
                                        <div class="notification error closeable">
				                        <p>{{$message}}</p><a class="close" href="#"></a></div>
                                        @enderror
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label">Description<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <textarea placeholder="What makes your ad unique" class="textarea form-control" name="description" id="description" rows="4" cols="20" data-error="Message field is required" readonly>{{ $listing->description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        @error('description')
                                        <div class="notification error closeable">
				                        <p>{{$message}}</p><a class="close" href="#"></a></div>
                                        @enderror
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="first-name">Set Price <span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="text" id="describe-ad2" class="form-control price-box" placeholder="$ Price" name="price" value="{{ $listing->price }}" readonly>
                                                    
                                                </div>
                                                @error('price')
                                                <div class="notification error closeable">
                                                <p>{{$message}}</p><a class="close" href="#"></a></div>
                                                @enderror
                                                <div class="custom-select">
                                                        <select id="category-name" class='select2' name="price_negotiable">                       
                                                            <option value="fixed" {{ $listing->price_negotiable == 'fixed' ? 'selected' : '' }}>Fixed</option>
                                                            <option value="negotiable" {{ $listing->price_negotiable == 'negotiable' ? 'selected' : '' }}>Negotiable</option>
                                                        </select>
                                                </div>
                                                @error('price_negotiable') <span
                                                    class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        @livewire('dependet-edit-country', ['country' => $listing->country_id, 'state' =>
                                        $listing->state_id, 'city' => $listing->city_id])
                                        
                                        @livewire('edit-image-preview', ['oldFeaturedImage' => $listing->featured_image,
                                        'oldImageOne' => $listing->image_one, 'oldImageTwo' => $listing->image_two,
                                        'oldImageThree' => $listing->image_three])
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="add-title">Phone Number <span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="text" id="add-title" class="form-control" placeholder="Phone Number" name="phone_number" value="{{ $listing->phone_number }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        @error('phone_number')
                                        <div class="notification error closeable">
				                        <p>{{$message}}</p><a class="close" href="#"></a></div>
                                        @enderror
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label">Publish<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <div class="custom-select">
                                                        <select id="category-name" class='select2' name="is_published">
                                                            <option value="0" {{ $listing->is_published == '0' ? 'selected' : '' }}>Published</option>
                                                            <option value="1" {{ $listing->is_published == '1' ? 'selected' : '' }}>UnPublished</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @error('is_published')
                                        <div class="notification error closeable">
				                        <p>{{$message}}</p><a class="close" href="#"></a></div>
                                        @enderror
                                    </div>
                                    
                                        <!-- <div class="form-group mt-20">
                                            <button type="submit" class="cp-default-btn-sm">Submit Now!</button>
                                        </div> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Post Ad Page End Here -->
        @stack('modals')

        @livewireScripts    
        @endsection