@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">About</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">profile</li>
            </ol>
        <form action="{{route('admin.profile.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col-md-5 mt-3">
                    <h3>Profile image</h3>
                        <img style="height: 30vh" src="{{ url($profile->pro_img)}}" alt="profile_image" class="">
                    <div>
                        <input type="file" class="mt-3" id="pro_img" name="pro_img">
                    </div>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title"><h4>Title</h4></label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$profile->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="head_title"><h4>Head title</h4></label>
                        <input type="text" class="form-control" id="head_title" name="head_title" value="{{$profile->head_title}}">
                    </div>
                    <div class="mb-5">
                        <label for="sub_title"><h4>Sub Title</h4></label>
                        <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{$profile->sub_title}}">
                    </div>
                    <div class="mb-5">
                        <label for="fb_link"><h4>Facebook link</h4></label>
                        <input type="text" class="form-control" id="fb_link" name="fb_link" value="{{$profile->fb_link}}">
                    </div>
                    <div class="mb-5">
                        <label for="tw_link"><h4>Twitter link</h4></label>
                        <input type="text" class="form-control" id="tw_link" name="tw_link" value="{{$profile->tw_link}}">
                    </div>
                    <div class="mb-5">
                        <label for="in_link"><h4>Linkedin link</h4></label>
                        <input type="text" class="form-control" id="in_link" name="in_link" value="{{$profile->in_link}}">
                    </div>
                    <div class="mb-5">
                        <label for="git_link"><h4>Github link</h4></label>
                        <input type="text" class="form-control" id="git_link" name="git_link" value="{{$profile->git_link}}">
                    </div>
                    <div class="mb-5">
                        <label for="description"><h4>Description</h4></label>
                        <textarea class="form-control" id="description" rows="4" name="description">{{$profile->description}}</textarea>
                    </div>
                </div>
            </div>
                <input type="submit" name="submit" class="btn btn-primary mt-5">
            </form>
        </div>
    </main> 
@endsection