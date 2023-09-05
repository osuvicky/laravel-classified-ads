@extends('layouts.main-layout')
@section('content')

<x-search />
        <!-- Post Ad Page Start Here -->
        <section class="s-space-bottom-full bg-accent-shadow-body">
            <div class="container">
                <div class="breadcrumbs-area">
                    <ul>
                        <li><a href="/">Home</a> -</li>
                        <li class="active">Update {{ $country->name}}</li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                        <x-admin_side />
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 col-12 mb--sm">
                        <div class="gradient-wrapper">
                            <div class="gradient-title">
                                <h2>Update Country</h2>
                            </div>
                            <div class="input-layout1 gradient-padding post-ad-page">
                                <form action="{{ route('admin.countries.update', $country->id) }}"  method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="border-bottom-2 mb-50 pb-30">
                                        <div class="section-title-left-dark border-bottom d-flex">
                                            <h3><img src="{{asset('')}}dashboard_assets/img/post-add1.png" alt="post-add" class="img-fluid"> Country Information</h3>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="add-title">Country Name <span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="text" id="add-title" class="form-control" name="name" value="{{ $country->name}}">
                                                </div>
                                            </div>
                                        </div>
                                        @error('name')
                                        <div class="notification error closeable">
				                        <p>{{$message}}</p><a class="close" href="#"></a></div>
                                        @enderror
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="add-title">Phone Code <span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="text" id="add-title" class="form-control" placeholder="Phone Code" name="phonecode" value="{{ $country->phonecode}}">
                                                </div>
                                            </div>
                                        </div>
                                        @error('phonecode')
                                        <div class="notification error closeable">
				                        <p>{{$message}}</p><a class="close" href="#"></a></div>
                                        @enderror
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="add-title">Shortname <span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="text" id="add-title" class="form-control" placeholder="Short Name" name="shortname" value="{{ $country->shortname}}">
                                                </div>
                                            </div>
                                        </div>
                                        @error('shortname')
                                        <div class="notification error closeable">
				                        <p>{{$message}}</p><a class="close" href="#"></a></div>
                                        @enderror
                                    </div>
                                    
                                        <div class="form-group mt-20">
                                            <button type="submit" class="cp-default-btn-sm">Update Now!</button>
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

        @endsection