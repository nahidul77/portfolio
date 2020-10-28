@extends('back-end.app')
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item">services</li>
    <li class="breadcrumb-item active">add</li>
</ol>
<div class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Add Service
                </header>
                <div class="panel-body">
                    <div class=" form">
                    <form method="POST" action="{{route('admin.service.store')}}" enctype="multipart/form-data" class="cmxform form-horizontal adminex-form" id="commentForm" >
                            @csrf
                            <div class="form-group ">
                                <label for="icon" class="control-label col-lg-2">Icon Name</label>
                                <div class="col-lg-10">
                                <input class=" form-control" id="icon" name="icon" value="" placeholder="fontawesome icon name ex: fa fa-user" minlength="2" type="text"  autocomplete="off" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-2">Title</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="title" name="title" value="" minlength="2" type="text"  autocomplete="off" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Description</label>
                                <div class="col-lg-10">
                                    <textarea rows="6" class="form-control" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-default btn-primary" type="submit">Submit</button>
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