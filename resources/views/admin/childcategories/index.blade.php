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
                                <h2>Child Categories</h2>
                            </div>
                            <div class="text-right text-right-mb" style="color:white;padding:20px">
                            <a href="{{ route('admin.childcategories.create') }}"><img src="{{asset('')}}dashboard_assets/img/banner/more2.png" alt="more" class="img-fluid">Add Child Category</a>
                            </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">SN</th>
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Image</th>
                                <th scope="col">View</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($child_categories as $index => $childcategory)
                                <tr>
                                <td>{{ $index + $child_categories->firstItem() }}</td>
                                <td>{{ $childcategory->name}}</td>
                                <td>{{ $childcategory->slug}}</td>
                                <td style="object-fit:contain; width:20%; height:20%;"><img src="{{ Storage::url($childcategory->image) }}" style="object-fit:contain; width:50%; height:50%;"/></td>
                                <td><a class="login-btn" href="/childcategories/{{$childcategory->id}}" ><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                <td><a class="login-btn" href="/childcategories/{{$childcategory->id}}/edit" ><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                <td><form method="POST" action="/childcategories/{{$childcategory->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <button title="Remove" class="login-btn" ><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form></td>
                                        @empty
                                <td><div class="m-2 p-2">No Child Category Found</div></td>
                                </tr>
                                @endforelse
                            </tbody>
                            </table>
                            
                            <div class="gradient-wrapper mb-60">
                            {{$child_categories->links()}}
                        </div>
                            	

                        </div>
                        </div>      
                    </div>                    
                </div>
            </div>
        </section>
        <!-- Login Area End Here -->

        @endsection