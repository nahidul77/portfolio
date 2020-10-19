@extends('layouts.admin_layout')

@section('content')
    {{-- <main>
        <div class="container-fluid">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">main</li>
            </ol>
        <form action="{{route('admin.main.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col-md-6 offset-md-2 mt-3">
                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="">
                    </div>
                    <div class="mb-5">
                        <label for="sub_title"><h3>Sub Title</h3></label>
                        <input type="text" class="form-control" id="sub_title" name="sub_title" value="">
                    </div>
                    <div class="mb-5">
                        <label for="service_head"><h3>Service Heading</h3></label>
                        <input type="text" class="form-control" id="service_head" name="service_head" value="">
                    </div>
                    <div class="mb-5">
                        <label for="portfolio_head"><h3>Portfolio Heading</h3></label>
                        <input type="text" class="form-control" id="portfolio_head" name="portfolio_head" value="">
                    </div>
                    <div class="mb-5">
                        <label for="about_head"><h3>About Heading</h3></label>
                        <input type="text" class="form-control" id="about_head" name="about_head" value="">
                    </div>
                    <div>
                        <h3>Upload Resume</h3>
                        <input type="file" class="mt-2" name="resume">
                    </div>
                    <div class="mt-4">
                        <h3>Upload Favicon</h3>
                        <input type="file" class="mt-2" name="fav-icon">
                    </div>
                </div>
            </div>
                <input type="submit" name="submit" class="btn btn-primary mt-5">
            </form>
        </div>
    </main>  --}}
     <!--body wrapper start-->
     <div class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Add Product
                    </header>
                    <div class="panel-body">
                        <div class=" form">
                            <form class="cmxform form-horizontal adminex-form" id="commentForm" method="POST" action="#">
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">Product Name</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="cname" name="slider_title" minlength="2" type="text"  autocomplete="off" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">Product Summary</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="cname" name="slider_title" minlength="2" type="text"  autocomplete="off" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">Product Details</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="cname" name="slider_title" minlength="2" type="text"  autocomplete="off" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">Product Quantity</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="cname" name="slider_title" minlength="2" type="text"  autocomplete="off" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">Product Price</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="cname" name="slider_title" minlength="2" type="text"  autocomplete="off" required />
                                    </div>
                                </div>
                                <div class="form-group last">
                                    <label class="control-label col-lg-2">Upload Image</label>
                                    <div class="col-lg-10">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                               <input type="file" class="default" />
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