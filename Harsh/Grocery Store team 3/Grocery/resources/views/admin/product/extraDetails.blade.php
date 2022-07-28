@extends('admin.layout.layout')
@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Product Details</h2>
                    <div class="clearfix"></div>
                   </div>
               <div class="x_content">
                    <br>
                    <form id="demo-form2" action="{{route('product.extraDetailsStore',$id)}}" method="post" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                     @csrf
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" value="{{@$product->ProductDetail->title}}" id="first-name" name="title" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Total Item <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="first-name" value="{{@$product->ProductDetail->total_items}}"
                          name="total_items" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <textarea name="description" class="form-control col-md-7 col-xs-12"  rows="5" required="">{{@$product->ProductDetail->description}}</textarea>
                        </div>
                      </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <input type="submit" class="btn btn-success" value="Submit">
                       
                        </div>
                      </div>
                     </form>
                     </div>
                     </div>
                     </div>

                   @endsection