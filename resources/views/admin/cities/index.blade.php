@extends('layouts.main-layout')
@section('content')

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
                        <div class="gradient-wrapper mb--sm">
                            <div class="gradient-title">
                                <h2>Cities</h2>
                            </div>
                            <div class="text-right text-right-mb" style="color:white;padding:20px">
                            <a href="{{ route('admin.cities.create') }}"><img src="{{asset('')}}dashboard_assets/img/banner/more2.png" alt="more" class="img-fluid">Add City</a>
                            </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">SN</th>
                                <th scope="col">Cities</th>
                                <!-- <th scope="col">State</th>
                                <th scope="col">Country</th> -->
                                <th scope="col">View</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($cities as $index => $city)
                                
                                <tr>
                                <td>{{ $index + $cities->firstItem() }}</td>
                                <td>{{ $city->name}}</td>
                                <!-- <td>{{$city->state_id}}</td>
                                <td>{{ $city->state_id}}</td> -->
                                <td><a class="login-btn" href="/cities/{{$city->id}}" ><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                <td><a class="login-btn" href="/cities/{{$city->id}}/edit" ><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                <td><form method="POST" action="/cities/{{$city->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <button title="Remove" class="login-btn" ><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form></td>
                                        @empty
                                <td><div class="m-2 p-2">No City Found</div></td>
                                </tr>
                                @endforelse
                                 
                            </tbody>
                           
                            </table>
                            <div class="gradient-wrapper mb-60">
                            {{$cities->links()}}
                            </div>
                        </div>
                        </div>      
                    </div>                    
                </div>
            </div>
        </section>
        <!-- Login Area End Here -->

        @endsection