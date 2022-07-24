@extends('admin/layout')
@section('content')

<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Welcome in MidKit</h2>
          </div>
          <div class="col-md-8">
    
            <form action="{{url('admin/register')}}" method="post">
            @csrf
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="fname">
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="lname">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Username <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_email" name="username" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Password </label>
                    <input type="text" class="form-control" id="c_subject" name="password">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Mobile Number </label>
                    <input type="tel" class="form-control" id="c_subject" name="mobile">
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Register">
                  </div>
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>

@endsection