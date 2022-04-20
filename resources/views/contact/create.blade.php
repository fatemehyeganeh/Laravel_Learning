@extends('layouts.master')

@section('content')

  <div>
    <form method="post" action="contact/{contact}">
      {{csrf_field()}}
      <div class="row"  >
        <div class="col-md-12" style="visibility: hidden">
          <div class="form-group">
            <label> from_user_id </label>
            <input type="number"  class="form-control @error('from_user_id') is-invalid @enderror" name="from_user_id" value="{{'2'}}">
          </div>
        </div>
        <div class="col-md-12"  style="visibility: hidden">
          <div class="form-group">
            <label> to_user_id </label>
            <input type="number"  class="form-control @error('to_user_id') is-invalid @enderror" name="to_user_id"  value="{{'1'}}">
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
        <div class="update ml-auto mr-auto">
          <button type="submit" class="btn btn-primary btn-round">Send</button>
        </div>
      </>
    </form>
</div>

@endsection