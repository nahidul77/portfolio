@extends('back-end.app')
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
                     @if(!isset($profile))
                    <form method="POST" action="{{route('admin.profile.store')}}" enctype="multipart/form-data" class="cmxform form-horizontal adminex-form" id="commentForm" >
                            @csrf
                            <div class="form-group ">
                                <label for="name" class="control-label col-lg-2">Name</label>
                                <div class="col-lg-10">
                                <input class=" form-control" id="name" name="name" value="" minlength="2" type="text"  autocomplete="off" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-2">Title</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="title" name="title" value="" minlength="2" type="text"  autocomplete="off"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Description</label>
                                <div class="col-lg-10">
                                    <textarea rows="6" class="form-control" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="fb_link" class="control-label col-lg-2">Facebook</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="fb_link" name="fb_link" value="" minlength="2" type="text"  autocomplete="off"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="tw_link" class="control-label col-lg-2">Twitter</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="tw_link" name="tw_link" value="" minlength="2" type="text"  autocomplete="off"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="in_link" class="control-label col-lg-2">Linkedin</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="in_link" name="in_link" value="" minlength="2" type="text"  autocomplete="off" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="git_link" class="control-label col-lg-2">Github</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="git_link" name="git_link" value="" minlength="2" type="text"  autocomplete="off"/>
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

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-default btn-primary" type="submit">Submit</button>
                                    <button class="btn btn-default btn-warning" type="reset">Reset</button>
                                </div>
                            </div>
                        </form>
                        @else
                    <form  method="POST" action="{{route('admin.profile.update')}}" enctype="multipart/form-data" class="cmxform form-horizontal adminex-form" id="commentForm">
                            @csrf
                            <div class="form-group ">
                                <label for="name" class="control-label col-lg-2">Name</label>
                                <div class="col-lg-10">
                                <input class=" form-control" id="name" name="name" value="{{isset($profile->name)? $profile->name : ''}}" minlength="2" type="text"  autocomplete="off" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-2">Title</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="title" name="title" value="{{isset($profile->title)? $profile->title : ''}}" minlength="2" type="text"  autocomplete="off"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Description</label>
                                <div class="col-lg-10">
                                    <textarea rows="6" class="form-control" name="description">{{isset($profile->description)? $profile->description : ''}}</textarea>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="fb_link" class="control-label col-lg-2">Facebook</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="fb_link" name="fb_link" value="{{isset($profile->fb_link)? $profile->fb_link : ''}}" minlength="2" type="text"  autocomplete="off"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="tw_link" class="control-label col-lg-2">Twitter</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="tw_link" name="tw_link" value="{{isset($profile->tw_link)? $profile->tw_link : ''}}" minlength="2" type="text"  autocomplete="off"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="in_link" class="control-label col-lg-2">Linkedin</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="in_link" name="in_link" value="{{isset($profile->in_link)? $profile->in_link : ''}}" minlength="2" type="text"  autocomplete="off"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="git_link" class="control-label col-lg-2">Github</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="git_link" name="git_link" value="{{isset($profile->git_link)? $profile->git_link : ''}}" minlength="2" type="text"  autocomplete="off"/>
                                </div>
                            </div>
                            
                            <div class="form-group last">
                                <label class="control-label col-lg-2">Upload Image</label>
                                <div class="col-lg-10">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 100px; height: 100px;">
                                            <img src="{{isset($profile->profile_img)? url($profile->profile_img): 'http://www.placehold.it/100x100/EFEFEF/AAAAAA&amp;text=no+image'}}" alt="" />
                                        </div>
                                        <div>
                                           <input type="file" class="default" name="profile_img" />
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