@extends('layouts.main-layout')
@section('content')

        
<x-search />
        <!-- Service Area Start Here -->
        <section class="service-layout1 bg-accent s-space-custom3">
            
            <div class="container">
                <div class="text-center item-mt item-mb">
                    <h2 class="title-bold-dark mb-none">Do you have Something to Sell?</h2>
                    <p>Post your ad on with us today</p>
                    <a href="{{ route('listings.create') }}" class="cp-default-btn direction-img">Post Your Ad Now!</a>
                </div>
            </div>
        </section>
        <!-- Service Area End Here -->
        <!-- Products Area Start Here -->
        <section class="products-layout1 bg-body s-space-default">
            <div class="container">
                <div class="section-title-dark">
                    <h2>Our Featured Products</h2>
                    <p>Browse To Our Top Products</p>
                </div>
            </div>
            <div class="container menu-list-wrapper">
                <div class="row menu-list category-grid-layout2 zoom-gallery">
                @foreach ($listings as $listing)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 menu-item">
                        <div class="product-box item-mb zoom-gallery">
                            <div class="item-mask-wrapper">
                                <div class="item-mask bg-box"><img src="{{ Storage::url($listing->featured_image) }}" alt="categories" class="img-fluid">
                                    <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                    <div class="title-ctg">{{ $listing->category->name }}</div>
                                    <ul class="info-link">
                                        <li><a href="{{ Storage::url($listing->featured_image) }}" class="elv-zoom" data-fancybox-group="gallery" title="{{ $listing->title }}"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                        <li><a href="/listings/{{$listing->id}}"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="symbol-featured"><img src="{{asset('')}}dashboard_assets/img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <div class="title-ctg">{{ $listing->category->name }}</div>
                                <h4 class="short-title"><a href="/listings/{{$listing->id}}">{{ $listing->title }}</a></h4>
                                <h3 class="long-title"><a href="/listings/{{$listing->id}}">{{ $listing->condition }}</a></h3>
                                <ul class="upload-info">
                                    <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ $listing->created_at->diffForHumans() }}</li>
                                    <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $listing->country->name }}, {{ $listing->city->name }}</li>
                                    <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>{{ $listing->condition }}</li>
                                </ul>
                                <p>{{ $listing->description}}</p>
                                <div class="price">${{ $listing->price }}</div>
                                <a href="#" class="product-details-btn">Details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                <div class="loadmore text-center item-mt">
                    <a href="#" class="cp-default-btn-primary">See More</a>
                </div>
            </div>
        </section>
        <!-- Products Area End Here -->
        

@endsection