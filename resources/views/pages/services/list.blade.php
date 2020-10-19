@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Services</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">list</li>
            </ol>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Serial</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php ($i=1)
                    @foreach($services as $service)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$service->icon}}</td>
                            <td>{{$service->title}}</td>
                            <td>{{Str::limit(strip_tags($service->description), 40)}}</td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-primary">Edit</a>
                                    </div>
                                    <div class="col-sm-4">
                                        <form action="{{route('admin.services.destroy', $service->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                                        </form>
                                    </div>
                                </div>    
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main> 
@endsection