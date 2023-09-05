@extends('layouts.main-layout')
@section('content')

<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Styles -->
@livewireStyles
<!-- Search Area Start Here -->
        <section class="search-layout1 bg-body full-width-border-bottom fixed-menu-mt">
                <div class="container">
                    <form id="cp-search-form">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="form-group search-input-area input-icon-location">
                                    <select id="location" class="select2">
                                        <option class="first" value="0">Select Location</option>
                                        <option value="1">Paypal</option>
                                        <option value="2">Master Card</option>
                                        <option value="3">Visa Card</option>
                                        <option value="4">Scrill</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="form-group search-input-area input-icon-category">
                                    <select id="categories" class="select2">
                                        <option class="first" value="0">Select Categories</option>
                                        <option value="1">Paypal</option>
                                        <option value="2">Master Card</option>
                                        <option value="3">Visa Card</option>
                                        <option value="4">Scrill</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="form-group search-input-area input-icon-keywords">
                                    <input placeholder="Enter Keywords here ..." value="" name="key-word" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 text-right text-left-mb">
                                <a href="#" class="cp-search-btn">
                                    <i class="fa fa-search" aria-hidden="true"></i>Search
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
        </section>
        <!-- Search Area End Here -->
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
                        <div class="gradient-wrapper sidebar-item-box">
                            <ul class="nav tab-nav my-account-title">
                                <li class="nav-item"><a class="active" href="#profile" data-toggle="tab" aria-expanded="false">Profile</a></li>
                                <li class="nav-item"><a href="#personal" data-toggle="tab" aria-expanded="false">Personal Information</a></li>
                                <li class="nav-item"><a href="#my-add" data-toggle="tab" aria-expanded="false">My Ads</a></li>
                            </ul>
                        </div>
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
                            <div role="tabpanel" class="gradient-padding tab-pane fade active show" id="profile">
                                <h3 class="title-section">Public Profile</h3>
                                <div class="public-profile"> 
                                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                @livewire('profile.update-profile-information-form')

                                    <x-jet-section-border />
                                @endif                                 
                                </div> 
                            </div> 
                            <div role="tabpanel" class="tab-pane fade" id="my-add">
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
                                                   <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                       <div class="product-box item-mb zoom-gallery">
                                                           <div class="item-mask-wrapper">
                                                               <div class="item-mask secondary-bg-box"><img src="img/product/product18.png" alt="categories" class="img-fluid">
                                                                   <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                                   <div class="title-ctg">Clothing</div>
                                                                   <ul class="info-link">
                                                                       <li><a href="img/product/product18.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                                       <li><a href="single-product-layout1.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                                   </ul>
                                                                   <div class="symbol-featured"><img src="img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                                               </div>
                                                           </div>
                                                           <div class="item-content">
                                                               <div class="title-ctg">Clothing</div>
                                                               <h3 class="short-title"><a href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product3.html">Solid Table Lamp</a></h3>
                                                               <h3 class="long-title"><a href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product3.html">Minimalist Solid Wood Table Lamp</a></h3>
                                                               <ul class="upload-info">
                                                                   <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                                                   <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                                                   <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                                                               </ul>
                                                               <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                                                               <div class="price">$79</div>
                                                               <a href="single-product-layout1.html" class="product-details-btn">Details</a>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   
                                                   
                                               </div>
                                           </div>
                                       </div>
                                       <div class="gradient-wrapper mb--xs mb-30 border-none">
                                           <ul class="cp-pagination">
                                               <li class="disabled"><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Previous</a></li>
                                               <li class="active"><a href="#">1</a></li>
                                               <li><a href="#">2</a></li>
                                               <li><a href="#">3</a></li>
                                               <li><a href="#">4</a></li>
                                               <li><a href="#">5</a></li>
                                               <li><a href="#">6</a></li>
                                               <li><a href="#">Next<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                                           </ul>
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