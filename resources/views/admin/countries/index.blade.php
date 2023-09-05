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
                                <h2>Countries</h2>
                            </div>
                            <div class="text-right text-right-mb" style="color:white;padding:20px">
                            <a href="{{ route('admin.countries.create') }}"><img src="{{asset('')}}dashboard_assets/img/banner/more2.png" alt="more" class="img-fluid">Add Country</a>
                            </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">SN</th>
                                <th scope="col">Name</th>
                                <th scope="col">Shortname</th>
                                <th scope="col">Phone Code</th>
                                <th scope="col">View</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($countries as $index => $country)
                                
                                <tr>
                                <td>{{ $index + $countries->firstItem() }}</td>
                                <td>{{ $country->name}}</td>
                                <td>{{ $country->shortname}}</td>
                                <td>{{ $country->phonecode}}</td>
                                <td><a class="login-btn" href="/countries/{{$country->id}}" ><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                <td><a class="login-btn" href="/countries/{{$country->id}}/edit" ><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                <td><form method="POST" action="/countries/{{$country->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <button title="Remove" class="login-btn" ><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form></td>
                                        @empty
                                <td><div class="m-2 p-2">No Country Found</div></td>
                                </tr>
                                @endforelse
                            </tbody>
                            </table>
                            
                            <div class="gradient-wrapper mb-60">
                            {{$countries->links()}}
                        </div>
                            	

                        </div>
                        </div>      
                    </div>                    
                </div>
            </div>
        </section>
        <!-- Login Area End Here -->

        @endsection