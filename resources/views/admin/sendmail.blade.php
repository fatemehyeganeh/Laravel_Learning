@extends('layouts.master')
@section('content')
    <div>
        <form method="post" action="admin.sendmail">
            {{csrf_field()}}
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label> Name </label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{$nam}}">
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
            <div class="col-md-12">
              <div class="form-group">
                  <label> Email </label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{$to}}">
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>   
             <div class="col-md-12">
                <div class="form-group">
                  <label> Subject </label>
                  <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" name="subject">
                  @error('subject')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
             <div class="col-md-12">
               <div class="form-group">
                  <label> Message </label>
                  <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Message" name="message"></textarea>
                  @error('message')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
            </div>
            <div class="row">
             <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-primary btn-round">Send</button>
              </div>
            </div>
          </form>
        
    </div>
@endsection