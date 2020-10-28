@extends('back-end.app')
@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active">Contact</li>
</ol>

 <!--body wrapper start-->
 <div class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Contact Information
                </header>
                <div class="panel-body">
                    <div class=" form">
                     @if(!isset($contact))
                    <form method="POST" action="{{route('admin.contact.store')}}" enctype="multipart/form-data" class="cmxform form-horizontal adminex-form" id="commentForm" >
                            @csrf
                            <div class="form-group ">
                                <label for="name" class="control-label col-lg-2">Name</label>
                                <div class="col-lg-10">
                                <input class=" form-control" id="name" name="name" value="" minlength="2" type="text"  autocomplete="off" required />
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="email" class="control-label col-lg-2">Email</label>
                                <div class="col-lg-10">
                                <input class=" form-control" id="email" name="email" value=""  type="email"  autocomplete="off" required />
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="phone" class="control-label col-lg-2">Phone</label>
                                <div class="col-lg-10">
                                <input class=" form-control" id="phone" name="phone" value="" type="tel"  autocomplete="off" placeholder="01681976938" pattern="[0-9]{11}" required/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="contact_head" class="control-label col-lg-2">Contact Heading</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="contact_head" name="contact_head" value="" minlength="2" type="text"  autocomplete="off"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Address</label>
                                <div class="col-lg-10">
                                    <textarea rows="6" class="form-control" name="address"></textarea>
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
                    <form  method="POST" action="{{route('admin.contact.update')}}" enctype="multipart/form-data" class="cmxform form-horizontal adminex-form" id="commentForm">
                            @csrf
                            <div class="form-group ">
                                <label for="name" class="control-label col-lg-2">Name</label>
                                <div class="col-lg-10">
                                <input class=" form-control" id="name" name="name" value="{{$contact->name}}" minlength="2" type="text"  autocomplete="off" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="email" class="control-label col-lg-2">Email</label>
                                <div class="col-lg-10">
                                <input class=" form-control" id="email" name="email" value="{{$contact->email}}"  type="email"  autocomplete="off" required />
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="phone" class="control-label col-lg-2">Phone</label>
                                <div class="col-lg-10">
                                <input class=" form-control" id="phone" name="phone" value="{{$contact->phone}}" type="tel"  autocomplete="off" placeholder="01681976938" pattern="[0-9]{11}" required/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="contact_head" class="control-label col-lg-2">Contact Heading</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="contact_head" name="contact_head" value="{{isset($contact->contact_head)? $contact->contact_head : ''}}" minlength="2" type="text"  autocomplete="off"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Address</label>
                                <div class="col-lg-10">
                                    <textarea rows="6" class="form-control" name="address">{{isset($contact->address)? $contact->address : ''}}</textarea>
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