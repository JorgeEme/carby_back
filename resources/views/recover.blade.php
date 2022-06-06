<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <div class="form-gap" style="padding-top: 70px"></div>
<div class="container">
	<div class="row mt-5">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <form id="register-form" role="form" autocomplete="off" class="form" method="post" action="{{url('/password/recovered')}}">
                        @csrf
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
                          <input required id="password" name="password" placeholder="Password" class="form-control"  type="password">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
                            <input required id="password_confirmation" name="password_confirmation" placeholder="Password confirmation" class="form-control"  type="password">
                          </div>
                      </div>
                      <br>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-block" style="background-color: #F55A13; color: white" value="Reset Password" type="submit">
                      </div>

                        <input type="hidden" name="token" value="{{ $token }}">
                        <input type="hidden" name="email" value="{{ $email }}">
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>
