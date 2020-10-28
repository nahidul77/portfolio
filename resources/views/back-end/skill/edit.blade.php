@extends('back-end.app')
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item">skill</li>
    <li class="breadcrumb-item active">update</li>
</ol>
<div class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Update Skill
                </header>
                <div class="panel-body">
                    <div class=" form">
                    <form method="POST" action="{{route('admin.skill.update', $skill->id)}}" enctype="multipart/form-data" class="cmxform form-horizontal adminex-form" id="commentForm" >
                            @csrf
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-2">Title</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="title" name="title" value="{{$skill->title}}" minlength="2" type="text"  autocomplete="off" required/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="skill_bar" class="control-label col-lg-2">Skill bar</label>
                                <div class="col-lg-10">
                                <input class=" form-control" id="skill_bar" name="skill_bar" value="{{$skill->skill_bar}}" min="1" max="100" minlength="2" type="number"  autocomplete="off" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-default btn-primary" type="submit">Update</button>
                                    <button class="btn btn-default btn-warning" type="reset">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!--body wrapper end-->
@endsection