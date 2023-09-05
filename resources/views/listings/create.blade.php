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
                        <li class="active">Create Ad</li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                        <x-user_side />
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">                       
                        <div class="tab-content my-account-wrapper gradient-wrapper input-layout1">
                        <div class="gradient-wrapper mb--sm">
                            <div class="gradient-title">
                                <h2>Create Listings</h2>
                            </div>
                            <div class="input-layout1 gradient-padding post-ad-page">
                                <form action="{{ route('listings.store') }}"  method="POST" enctype="multipart/form-data" id="post-add-form">
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
                                                    <input type="text" id="add-title" class="form-control" placeholder="Ads Title" name="title" value="{{old('title')}}">
                                                </div>
                                            </div>
                                        </div>
                                        @error('title')
                                        <div class="notification error closeable">
				                        <p>{{$message}}</p><a class="close" href="#"></a></div>
                                        @enderror

                                            @livewire('dependent-category')

                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="add-title">Location<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="text" id="add-title" class="form-control" placeholder="Location" name="location" value="{{old('location')}}">
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
                                                        <select id="category-name" class='select2' name="condition">
                                                            <option value="new">New</option>
                                                            <option value="used">Used</option>
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
                                                    <textarea placeholder="What makes your ad unique" class="textarea form-control" name="description" id="description" rows="4" cols="20" data-error="Message field is required" >{{old('description')}}</textarea>
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
                                                    <input type="text" id="describe-ad2" class="form-control price-box" placeholder="$ Price" name="price" value="{{old('price')}}">
                                                    
                                                </div>
                                                @error('price')
                                                <div class="notification error closeable">
                                                <p>{{$message}}</p><a class="close" href="#"></a></div>
                                                @enderror
                                                <div class="custom-select">
                                                        <select id="category-name" class='select2' name="price_negotiable">                       
                                                            <option value="fixed">Fixed</option>
                                                            <option value="negotiable">Negotiable</option>
                                                        </select>
                                                </div>
                                                @error('price_negotiable')
                                                <div class="notification error closeable">
                                                <p>{{$message}}</p><a class="close" href="#"></a></div>
                                                @enderror
                                            </div>
                                        </div>
                                        

                                        @livewire('dependent-country')
                                        @livewire('image-preview')
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="add-title">Phone Number <span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="text" id="add-title" class="form-control" placeholder="Phone Number" name="phone_number" value="{{old('phone_number')}}">
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
                                                            <option value="1">Publish</option>
                                                            <option value="0">UnPublish</option>
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
                                    
                                        <div class="form-group mt-20">
                                            <button type="submit" class="cp-default-btn-sm">Submit Now!</button>
                                        </div>
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