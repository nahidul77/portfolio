@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Portfolio</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        <form action="{{ route('admin.portfolio.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-5 mt-3">
                        <h3>Portfolio image</h3>
                        <div>
                            <ul class="list-group">
                                <li class="list-group-item"><input type="file" class="mt-3"  name="pa_img"> <strong>Main (800&times;800)</strong></li>
                                <li class="list-group-item"><input type="file" class="mt-3"  name="pb_img"> <strong>1st (800&times;530)</strong></li>
                                <li class="list-group-item"><input type="file" class="mt-3"  name="pc_img"> <strong>2nd (800&times;530)</strong></li>
                                <li class="list-group-item"><input type="file" class="mt-3"  name="pd_img"> <strong>3rd (800&times;530)</strong></li>
                                <li class="list-group-item"><input type="file" class="mt-3"  name="pe_img"> <strong>4th (800&times;530)</strong></li>
                              </ul>
                        </div>
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title"><h4>Title</h4></label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-5">
                            <label for="view_site"><h4>Website link</h4></label>
                            <input type="text" class="form-control" id="view_site" name="view_site">
                        </div>
                        <div class="mb-5">
                            <label for="description"><h4>Description</h4></label>
                            <textarea class="form-control" id="description" rows="4" name="description"></textarea>
                        </div>
                    </div>
                </div>
                    <input type="submit" name="submit" class="btn btn-primary mt-3">
            </form>
        </div>
    </main> 
@endsection