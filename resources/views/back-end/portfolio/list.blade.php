@extends('back-end.app')
@section('content')
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">portfolio</li>
    </ol>
     <!--body wrapper start-->
     <div class="wrapper">
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">Portfolio List</header>
                    <div class="panel-body">
                        @if(isset($portfolios))
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Title</th>
                                        <th>Site Link</th>
                                        <th>Description</th>
                                        <th>Images</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php ($i=1)
                                    @foreach($portfolios as $portfolio)
                                        <tr>
                                            <th>{{$i++}}</th>
                                            <td>{{$portfolio->title}}</td>
                                            <td>{{$portfolio->site_link}}</td>
                                            <td>{{Str::limit(strip_tags($portfolio->description), 40)}}</td>
                                            <td>
                                                <img src="{{url($portfolio->img_a)}}" height="50px" width="50px" alt="" />
                                                @if($portfolio->img_b)
                                                    <img src="{{url($portfolio->img_b)}}" height="50px" width="50px" alt="" />
                                                @endif
                                                @if($portfolio->img_c)
                                                    <img src="{{url($portfolio->img_c)}}" height="50px" width="50px" alt="" />
                                                @endif
                                                @if($portfolio->img_d)
                                                    <img src="{{url($portfolio->img_d)}}" height="50px" width="50px" alt="" />
                                                @endif
                                                @if($portfolio->img_e)
                                                    <img src="{{url($portfolio->img_e)}}" height="50px" width="50px" alt="" />
                                                @endif
                                            </td>
                                            <td>
                                                <div>
                                                    <div class="pull-left mr-1">
                                                        <a href="{{ route('admin.portfolio.edit', $portfolio->id) }}" class="btn btn-primary btn-xs">Edit</a>
                                                    </div>
                                                    <div class="pull-left">
                                                        <form action="{{route('admin.portfolio.destroy', $portfolio->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="submit" name="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-xs">
                                                        </form>
                                                    </div>
                                                </div>  
                                            </td>
                                        </tr>
                                    @endforeach  
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Title</th>
                                        <th>Site Link</th>
                                        <th>Description</th>
                                        <th>Images</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        @else 
                        <div class="text-center"><h3>No Data Found</h3></div>
                        @endif
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!--body wrapper end-->

@endsection