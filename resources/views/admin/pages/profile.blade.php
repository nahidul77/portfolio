@extends('admin.app')
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active">Profile</li>
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
                        <form class="cmxform form-horizontal adminex-form" id="commentForm" method="POST" action="#">
                            <div class="form-group ">
                                <label for="name" class="control-label col-lg-2">Name</label>
                                <div class="col-lg-10">
                                <input class=" form-control" id="name" name="name" value="{{isset($profile)? $profile->name : ''}}" minlength="2" type="text"  autocomplete="off" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-2">Title</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="title" name="title" value="{{isset($profile)? $profile->title : ''}}" minlength="2" type="text"  autocomplete="off" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="sub_title" class="control-label col-lg-2">Sub Title</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="sub_title" name="sub_title" value="{{isset($profile)? $profile->sub_title : ''}}" minlength="2" type="text"  autocomplete="off" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Description</label>
                                <div class="col-lg-10">
                                    <textarea rows="6" class="form-control" name="description">{{isset($profile)? $profile->description : ''}}</textarea>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="fb_link" class="control-label col-lg-2">Facebook</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="fb_link" name="fb_link" value="{{isset($profile)? $profile->fb_link : ''}}" minlength="2" type="text"  autocomplete="off" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="tw_link" class="control-label col-lg-2">Twitter</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="tw_link" name="tw_link" value="{{isset($profile)? $profile->tw_link : ''}}" minlength="2" type="text"  autocomplete="off" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="in_link" class="control-label col-lg-2">Linkedin</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="in_link" name="in_link" value="{{isset($profile)? $profile->in_link : ''}}" minlength="2" type="text"  autocomplete="off" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="git_link" class="control-label col-lg-2">Github</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="git_link" name="git_link" value="{{isset($profile)? $profile->git_link : ''}}" minlength="2" type="text"  autocomplete="off" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="service_head" class="control-label col-lg-2">Service Heading</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="service_head" name="service_head" value="{{isset($profile)? $profile->service_head : ''}}" minlength="2" type="text"  autocomplete="off" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="portfolio_head" class="control-label col-lg-2">Portfolio Heading</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="portfolio_head" name="portfolio_head" value="{{isset($profile)? $profile->portfolio_head : ''}}" minlength="2" type="text"  autocomplete="off" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="about_head" class="control-label col-lg-2">About Heading</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="about_head" name="about_head" value="{{isset($profile)? $profile->about_head : ''}}" minlength="2" type="text"  autocomplete="off" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="resume" class="control-label col-lg-2">Upload Resume</label>
                                <div class="col-lg-10">
                                    <input type="file" class="default" id="resume" name="resume"/>
                                </div>
                            </div>
                            <div class="form-group last">
                                <label class="control-label col-lg-2">Upload Image</label>
                                <div class="col-lg-10">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                        </div>
                                        <div>
                                           <input type="file" class="default" name="profile_img" />
                                        </div>
                                    </div>
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
                    </div>

                </div>
            </section>
        </div>
    </div>
</div>
<!--body wrapper end-->
@endsection