@extends('back-end.app')
@section('content')
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">skill</li>
    </ol>
     <!--body wrapper start-->
     <div class="wrapper">
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">Skill List</header>
                    <div class="panel-body">
                        @if(isset($skills))
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Title</th>
                                        <th>Skill bar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php ($i=1)
                                    @foreach($skills as $skill)
                                        <tr>
                                            <th>{{$i++}}</th>
                                            <td>{{$skill->title}}</td>
                                            <td>{{$skill->skill_bar}}</td>
                                            <td>
                                                <div>
                                                    <div class="pull-left mr-1">
                                                        <a href="{{ route('admin.skill.edit', $skill->id) }}" class="btn btn-primary btn-xs">Edit</a>
                                                    </div>
                                                    <div class="pull-left">
                                                        <form action="{{route('admin.skill.destroy', $skill->id)}}" method="POST">
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
                                        <th>Skill bar</th>
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