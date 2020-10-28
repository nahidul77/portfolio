@extends('back-end.app')
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item">portfolio</li>
    <li class="breadcrumb-item active">update</li>
</ol>
<div class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Update Portfolio
                </header>
                <div class="panel-body">
                    <div class=" form">
                    <form method="POST" action="{{route('admin.portfolio.update', $portfolio->id)}}" enctype="multipart/form-data" class="cmxform form-horizontal adminex-form" id="commentForm" >
                            @csrf
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-2">Title</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="title" name="title" value="{{$portfolio->title}}" minlength="2" type="text"  autocomplete="off" required/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="site_link" class="control-label col-lg-2">Site Link</label>
                                <div class="col-lg-10">
                                <input class=" form-control" id="site_link" name="site_link" value="{{$portfolio->site_link}}" placeholder="fontawesome icon name ex: fa fa-user" minlength="2" type="text"  autocomplete="off" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Description</label>
                                <div class="col-lg-10">
                                    <textarea rows="6" class="form-control" name="description">{{$portfolio->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group last">
                                <label class="control-label col-lg-2">Upload Images</label>
                                <div class="col-lg-10">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="row">
                                            <div class="fileupload-new thumbnail col-lg-2" style="width: 100px; height: 100px;">
                                                <img src="{{url($portfolio->img_a)}}" alt="" />
                                            </div>
                                            <div class="fileupload-new thumbnail col-lg-2" style="width: 100px; height: 100px;">
                                                @if($portfolio->img_b)
                                                    <img src="{{url($portfolio->img_b)}}" alt="" />
                                                @endif
                                            </div>
                                            <div class="fileupload-new thumbnail col-lg-2" style="width: 100px; height: 100px;">
                                                @if($portfolio->img_c)
                                                    <img src="{{url($portfolio->img_c)}}" alt="" />
                                                @endif
                                            </div>
                                            <div class="fileupload-new thumbnail col-lg-2" style="width: 100px; height: 100px;">
                                                @if($portfolio->img_d)
                                                    <img src="{{url($portfolio->img_d)}}" alt="" />
                                                @endif
                                            </div>
                                            <div class="fileupload-new thumbnail col-lg-2" style="width: 100px; height: 100px;">
                                                @if($portfolio->img_e)
                                                    <img src="{{url($portfolio->img_e)}}" alt="" />
                                                @endif
                                            </div>
                                        </div>
                                        <div>
                                           <input type="file" class="default" name="images[]" multiple/>
                                        </div>
                                    </div>
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