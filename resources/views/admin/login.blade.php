@include('admin.includes.header')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="header">
                    <h2>
                        Admin Login
                    </h2>
                </div>
                <div class="body">
                    @if(Session::has('error'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{session::get('error') }}</strong> You should check in on some of those fields below.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>


                @endif

                    <form id="sign_in" method="POST" action="{{ route('admin.login') }}">
                        @csrf
                        <div class="msg">Sign in to start your session</div>
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="form-line">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-8 p-t-5">
                                <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                                <label for="rememberme">Remember Me</label>
                            </div>
                            <div class="col-xs-4">
                                <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                            </div>
                        </div>
                        <div class="row m-t-15 m-b--20">
                            <div class="col-xs-6">
                                <a href="sign-up.html">Register Now!</a>
                            </div>
                            <div class="col-xs-6 align-right">
                                <a href="forgot-password.html">Forgot Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
