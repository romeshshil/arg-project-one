@extends('frontend.layouts.master')

@section('content')
	
     <div class="container">
                     <div class="row">
                        <div class="col-md-offset-3 col-md-6 settings">
                           <form action="/subscriber/dashboard/verify/store" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                           	<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                           	 {{ csrf_field() }}
                              <p>Account Verification</p>
                              <div class="custom_message">
                              </div>
                              <div class="row">
                                 <div class="col-md-3">
                                    <label>NID Number</label>
                                 </div>
                                 <div class="col-md-9">
                                    <input type="text" name="nid_no" />
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-3">
                                    <label>Your Photo</label>
                                 </div>
                                 <div class="col-md-9">
                                    <input type="file" name="photo" required/>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-3">
                                    <label>NID 1st Page</label>
                                 </div>
                                 <div class="col-md-9">
                                    <input type="file" name="photo_one" required />
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-3">
                                    <label>NID 2nd Page</label>
                                 </div>
                                 <div class="col-md-9">
                                    <input type="file" name="photo_two" required/>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-offset-3 col-md-9">
                                    <input type="submit" name="submit" value="Save Change" class="btn" />
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
		
@endsection