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
                        
                        <x-user_side />
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
                                   <div class="col-lg-12">
                                       <div class="gradient-wrapper item-mb border-none">
                                           <div class="gradient-title">
                                               <div class="row no-gutters">
                                                   <div class="col-4 text-center-mb">
                                                       <h2 class="mb10--mb">My Ad List</h2>
                                                   </div>
                                                   <div class="col-8">
                                                       <div class="layout-switcher float-none-mb text-center-mb mb10--mb">
                                                           <ul>
                                                               <li>
                                                                   <div class="page-controls-sorting">
                                                                       <div class="dropdown">
                                                                           <button class="btn sorting-btn dropdown-toggle" type="button" data-toggle="dropdown">Sort By<i class="fa fa-sort" aria-hidden="true"></i></button>
                                                                           <ul class="dropdown-menu">
                                                                               <li><a href="#">Date</a></li>
                                                                               <li><a href="#">Best Sale</a></li>
                                                                               <li><a href="#">Rating</a></li>
                                                                           </ul>
                                                                       </div>
                                                                   </div>
                                                               </li>
                                                               <li class="active"><a href="#" data-type="category-list-layout3" class="product-view-trigger"><i class="fa fa-th-large"></i></a></li>
                                                               <li><a href="#" data-type="category-grid-layout3" class="product-view-trigger"><i class="fa fa-list"></i></a></li>
                                                           </ul>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div id="category-view" class="category-list-layout3 gradient-padding zoom-gallery">
                                               <div class="row">
                                               @foreach ($listings as $listing)
                                                   <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                       <div class="product-box item-mb zoom-gallery">
                                                           <div class="item-mask-wrapper">
                                                               <div class="item-mask secondary-bg-box"><img src="{{ Storage::url($listing->featured_image) }}" alt="categories" class="img-fluid">
                                                                   <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                                   <div class="title-ctg">{{ $listing->category->name }}</div>
                                                                   <ul class="info-link">
                                                                       <li><a href="{{ Storage::url($listing->featured_image) }}" class="elv-zoom" data-fancybox-group="gallery" title="{{ $listing->title }}"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                                       <li><a href="/listings/{{$listing->id}}"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                                   </ul>
                                                                   <div class="symbol-featured"><img src="{{ Storage::url($listing->featured_image) }}" alt="symbol" class="img-fluid"> </div>
                                                               </div>
                                                           </div>
                                                           <div class="item-content">
                                                               <div class="title-ctg">{{ $listing->category->name }}</div>
                                                               <h3 class="short-title"><a href="">{{ $listing->title }}</a></h3>
                                                               <h3 class="long-title"><a href="">{{ $listing->title }}</a></h3>
                                                               <ul class="upload-info">
                                                                   <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ $listing->created_at->diffForHumans() }}</li>
                                                                   <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $listing->country->name }}, {{ $listing->city->name }}</li>
                                                                   <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>{{ $listing->category->name }}</li>
                                                               </ul>
                                                               <p>{{ $listing->description}}</p>
                                                               <div class="price">${{ $listing->price }}</div>
                                                               <a href="/listings/{{$listing->id}}" class="product-details-btn">Details</a>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   @endforeach
                                                   
                                               </div>
                                           </div>
                                       </div>
                                       <div class="gradient-wrapper mb--xs mb-30 border-none">
                                       {{$listings->links()}}
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