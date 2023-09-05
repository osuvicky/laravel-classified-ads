@extends('layouts.main-layout')
@section('content')

<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Styles -->
@livewireStyles
<x-search />
        <!-- Login Area Start Here -->
        <section class="s-space-bottom-full bg-accent-shadow-body">
            <div class="container">
                <div class="breadcrumbs-area">
                    <ul>
                        <li><a href="#">Home</a> -</li>
                        <li class="active">My Account Page</li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        
                        <x-admin_side />
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">                        
                        <div class="tab-content my-account-wrapper gradient-wrapper input-layout1">
                            <div role="tabpanel" class="gradient-padding tab-pane fade" id="personal">
                                <h2 class="title-section">Personal Information</h2>
                                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                <div class="mt-10 sm:mt-0">
                                    @livewire('profile.update-password-form')
                                </div>

                                <x-jet-section-border />
                                @endif

                                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.two-factor-authentication-form')
                        </div>

                        <x-jet-section-border />
                        @endif

                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.logout-other-browser-sessions-form')
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                            <x-jet-section-border />

                            <div class="mt-10 sm:mt-0">
                                @livewire('profile.delete-user-form')
                            </div>
                        @endif
                                                         
                                    
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <h3 class="title-section">Public Profile</h3>
                                <div class="public-profile"> 
                                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                @livewire('profile.update-profile-information-form')

                                    <x-jet-section-border />
                                @endif                                 
                                </div> 
                            </div>
                            <div role="tabpanel" class="gradient-padding tab-pane fade active show" id="my-add">
                               <div class="row">
                                   
                                     
            <div class="container">
                <!-- <div class="section-title-dark">
                    <p>Browse Our Top Categories</p>
                </div> -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        <div class="service-box1 bg-body text-center">
                            <img src="{{asset('')}}dashboard_assets/img/service/service1.png" alt="service" class="img-fluid">
                            <h3 class="title-medium-dark mb-none"><a href="category-list-layout1.html">Listings</a></h3>
                            <div class="view">{{ count($listings) }}</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        <div class="service-box1 bg-body text-center">
                            <img src="{{asset('')}}dashboard_assets/img/service/service4.png" alt="service" class="img-fluid">
                            <h3 class="title-medium-dark mb-none"><a href="category-grid-layout1.html">Users</a></h3>
                            <div class="view">{{ count($users) }}</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        <div class="service-box1 bg-body text-center">
                            <img src="{{asset('')}}dashboard_assets/img/service/service3.png" alt="service" class="img-fluid">
                            <h3 class="title-medium-dark mb-none"><a href="category-list-layout2.html">Categories</a></h3>
                            <div class="view">{{ count($categories) }}</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        <div class="service-box1 bg-body text-center">
                            <img src="{{asset('')}}dashboard_assets/img/service/service2.png" alt="service" class="img-fluid">
                            <h3 class="title-medium-dark mb-none"><a href="category-grid-layout2.html">Sub Categories</a></h3>
                            <div class="view">{{ count($sub_categories) }}</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        <div class="service-box1 bg-body text-center">
                            <img src="{{asset('')}}dashboard_assets/img/service/service5.png" alt="service" class="img-fluid">
                            <h3 class="title-medium-dark mb-none"><a href="category-list-layout3.html">Child Categories</a></h3>
                            <div class="view">{{ count($child_categories) }}</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        <div class="service-box1 bg-body text-center">
                            <img src="{{asset('')}}dashboard_assets/img/service/service6.png" alt="service" class="img-fluid">
                            <h3 class="title-medium-dark mb-none"><a href="category-grid-layout3.html">Countries</a></h3>
                            <div class="view">{{ count($countries) }}</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        <div class="service-box1 bg-body text-center">
                            <img src="{{asset('')}}dashboard_assets/img/service/service7.png" alt="service" class="img-fluid">
                            <h3 class="title-medium-dark mb-none"><a href="category-list-layout1.html">States</a></h3>
                            <div class="view">{{ count($states) }}</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        <div class="service-box1 bg-body text-center">
                            <img src="{{asset('')}}dashboard_assets/img/service/service8.png" alt="service" class="img-fluid">
                            <h3 class="title-medium-dark mb-none"><a href="category-grid-layout1.html">Cities</a></h3>
                            <div class="view">{{ count($cities) }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="text-center item-mt item-mb">
                    <h2 class="title-bold-dark mb-none">Do you have Something to Sell?</h2>
                    <p>Post your ad on classified.com</p>
                    <a href="{{ route('listings.create') }}" class="cp-default-btn direction-img">Post Your Ad Now!</a>
                </div>
            </div>
         
                                                   
                                                   
                                               
                                       
                                  
                               </div>
                            </div>                     
                        </div>                       
                    </div>                    
                </div>
            </div>
        </section>
        <!-- Login Area End Here -->
        @stack('modals')

        @livewireScripts


        @endsection