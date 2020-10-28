@extends('back-end.app')
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item">Portfolio</li>
    <li class="breadcrumb-item active">add</li>
</ol>
<div class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Add Portfolio
                </header>
                <div class="panel-body">
                    <div class=" form">
                    <form method="POST" action="{{route('admin.portfolio.store')}}" enctype="multipart/form-data" class="cmxform form-horizontal adminex-form" id="commentForm" >
                            @csrf
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-2">Title</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="title" name="title" value="" minlength="2" type="text"  autocomplete="off" required/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="site_link" class="control-label col-lg-2">Website Link</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="site_link" name="site_link" value="" minlength="2" type="text"  autocomplete="off"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Description</label>
                                <div class="col-lg-10">
                                    <textarea rows="6" class="form-control" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group last">
                                <label class="control-label col-lg-2">Upload Images</label>
                                <div class="col-lg-10">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 100px; height: 100px;">
                                            <img src="http://www.placehold.it/800x800/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                        </div>
                                        <div>
                                           <input type="file" class="default" name="images[]" multiple/>
                                        </div>
                                    </div>
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
<script>
    $(function(){
    $("input[type='submit']").click(function(){
        var $fileUpload = $("input[type='file']");
        if (parseInt($fileUpload.get(0).files.length)>4){
         alert("You can only upload a maximum of 4 files");
        }
    });    
});
</script>
@endsection