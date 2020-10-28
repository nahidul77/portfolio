@extends('back-end.app')
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active">Site</li>
</ol>

 <!--body wrapper start-->
 <div class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Profile
                </header>
                <div class="panel-body">
                    <div class=" form">
                        @if(!isset($site))
                        <form  method="POST" action="{{route('admin.site.store')}}" enctype="multipart/form-data" class="cmxform form-horizontal adminex-form" id="commentForm">
                            @csrf
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-2">Title</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="title" name="title" value="" minlength="2" type="text"  autocomplete="off" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="sub_title" class="control-label col-lg-2">Sub Title</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="sub_title" name="sub_title" value="" minlength="2" type="text"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="service_head" class="control-label col-lg-2">Service Heading</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="service_head" name="service_head" value="" minlength="2" type="text"  autocomplete="off"  />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="portfolio_head" class="control-label col-lg-2">Portfolio Heading</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="portfolio_head" name="portfolio_head" value="" minlength="2" type="text"  autocomplete="off"  />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="about_head" class="control-label col-lg-2">About Heading</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="about_head" name="about_head" value="" minlength="2" type="text"  autocomplete="off"  />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="resume" class="control-label col-lg-2">Upload Resume</label>
                                <div class="col-lg-10">
                                    <input type="file" class="default" id="resume" name="resume"/>
                                </div>
                            </div>
                            <div class="form-group last">
                                <label class="control-label col-lg-2">Upload Favicon</label>
                                <div class="col-lg-10">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 32px; height: 32px;">
                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                        </div>
                                        <div>
                                           <input type="file" class="default" name="fav_img"/>
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
                        @else 
                        <form  method="POST" action="{{route('admin.site.update')}}" enctype="multipart/form-data" class="cmxform form-horizontal adminex-form" id="commentForm">
                            @csrf
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-2">Title</label>
                                <div class="col-lg-10">
                                <input class=" form-control" id="title" name="title" value="{{isset($site->title)? $site->title: ''}}" minlength="2" type="text"  autocomplete="off" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="sub_title" class="control-label col-lg-2">Sub Title</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="sub_title" name="sub_title" value="{{isset($site->sub_title)? $site->sub_title: ''}}" minlength="2" type="text"  autocomplete="off"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="service_head" class="control-label col-lg-2">Service Heading</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="service_head" name="service_head" value="{{isset($site->service_head)? $site->service_head: ''}}" minlength="2" type="text"  autocomplete="off"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="portfolio_head" class="control-label col-lg-2">Portfolio Heading</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="portfolio_head" name="portfolio_head" value="{{isset($site->portfolio_head)? $site->portfolio_head: ''}}" minlength="2" type="text"  autocomplete="off"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="about_head" class="control-label col-lg-2">About Heading</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="about_head" name="about_head" value="{{isset($site->about_head)? $site->about_head: ''}}" minlength="2" type="text"  autocomplete="off"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="resume" class="control-label col-lg-2">Upload Resume</label>
                                <div class="col-lg-10">
                                    <input type="file" class="default" id="resume" name="resume"/>
                                </div>
                            </div>
                            <div class="form-group last">
                                <label class="control-label col-lg-2">Upload Favicon</label>
                                <div class="col-lg-10">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 32px; height: 32px;">
                                        <img src="{{isset($site->fav_img)? url($site->fav_img) : ''}}" alt="" />
                                        </div>
                                        <div>
                                           <input type="file" class="default" name="fav_img"/>
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
                        @endif
                    </div>

                </div>
            </section>
        </div>
    </div>
</div>
<!--body wrapper end-->
@endsection