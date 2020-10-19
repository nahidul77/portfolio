@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Portfolio</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">list</li>
            </ol>
            <table class="table table-bordered .table-responsive">
                <thead>
                  <tr>
                    <th scope="col">Serial</th>
                    <th scope="col">Title</th>
                    <th scope="col">Link</th>
                    <th scope="col">Description</th>
                    <th scope="col">Main img</th>
                    <th scope="col">1st img</th>
                    <th scope="col">2nd img</th>
                    <th scope="col">3rd img</th>
                    <th scope="col">4th img</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php ($i=1)
                    @foreach($portfolio as $portfolio)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$portfolio->title}}</td>
                            <td>{{$portfolio->view_site}}</td>
                            <td>{{Str::limit(strip_tags($portfolio->description), 40)}}</td>
                            <td><img src="{{ url($portfolio->pa_img) }}" alt="" height="10%"></td>
                            <td><img src="{{ url($portfolio->pb_img) }}" alt="" height="10%"></td>
                            <td><img src="{{ url($portfolio->pc_img) }}" alt="" height="10%"></td>
                            <td><img src="{{ url($portfolio->pd_img) }}" alt="" height="10%"></td>
                            <td><img src="{{ url($portfolio->pe_img) }}" alt="" height="10%"></td>
                            <td>
                                <div class="row">
                                    <div>
                                        <a href="{{ route('admin.portfolio.edit', $portfolio->id) }}" class="btn btn-primary mb-1">Edit</a>
                                    </div>
                                    <div>
                                        <form action="{{route('admin.portfolio.destroy', $portfolio->id)}}" method="POST">
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