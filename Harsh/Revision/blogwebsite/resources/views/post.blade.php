@extends('layouts.app')
@section('content')
<div class="container">
        <div class=" text-center mt-5 ">

            <h1 >Create Blog</h1>
                
            
        </div>

    
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
       
            <div class = "container">
                             <form action="" method="POST">
                                @csrf
                            

            

            <div class="controls">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Title *</label>
                            <input id="form_name" type="text" name="title" class="form-control" placeholder="Please enter your title *" required="required" data-error="Firstname is required.">
                            
                        </div>
                    </div>
                    
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Body *</label>
                            <textarea id="form_message" name="body" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea
                                >
                            </div>

                        </div>


                    <div class="col-md-12">
                        
                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                            " value="Create" >
                    
                </div>
          
                </div>


        </div>
         </form>
         @if (session()->has('status'))
         {{session('status')}}
         @endif
        </div>
            </div>


    </div>
        <!-- /.8 -->

    </div>
    <!-- /.row-->

</div>
</div>

@endsection