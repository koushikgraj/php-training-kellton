@extends('admin/layout')

@section('container')
<center>
    <h1 class="mb10">Manage Category</h1>
</center>
<a href="category">
    <button type="button" class="btn btn-success">
        Back
    </button>
</a>
<div class="row m-t-30">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Product</div>
                    <div class="card bg-light">
                        <div class="card-body">
                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                            @endif
                            <div class="card-body">
                                <div class="card-title">

                                    <h3 class="text-center title-2">Add Category</h3>
                                </div>
                                <hr>
                                <form action="{{url('admin/manage_category')}}" method="post" novalidate="novalidate">
                                    @csrf

                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Product Name</label>
                                        <input id="cc-pament" name="product_name" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                    </div>

                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">Product Price</label>
                                        <input id="cc-name" name="product_price" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>

                                    <!-- <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Upload Image</label>
                                                <input type="file" name="image" id="txtFile" />
                                            </div> -->
                                    <div class="field">
                                        <label class="label">Upload Image</label>
                                        <div class="control">
                                            <div class="col-md-6 mx-auto">
                                                <img src="{{asset('admin_assets/images/icon/upload.png')}}" alt="image" id="img" style="max-width:100px; display: block; margin-left: auto; margin-right: auto; padding-bottom: 10px; width: 50%;">
                                                <input type="file" id="upload" name="image">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">Product Description</label>
                                        <input id="cc-name" name="product_descrip" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>

                                    <div>
                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">

                                            <span id="payment-button-amount">Add Product</span>
                                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>






                </div>

            </div>
        </div>

        @endsection