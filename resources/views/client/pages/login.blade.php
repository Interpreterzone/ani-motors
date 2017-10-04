@extends('client.master.index')
@section('custom')

    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-sm-10 col-sm-push-1 col-md-6 col-md-push-3">
                <div class="login-signup__top center">
                    <h2 class="center"  style="margin-left: auto">Log in</h2>
                    <p class="" style="margin-bottom: 20px">Complete the form below to log into your ANI MOTORS account</p>
                </div>

                <div class="">
                    <form class="new_client" id="new_client" action="#" accept-charset="UTF-8" method="#"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="QsjMNcpf5h77KTRa840V4OHxXD6JGErmKczlSvkHWc6ksSa02Wwrm4kW6RyCU5gfepaDV2oTRGakKW3TWpsmoA==">
                        <div class="form-group ">
                            <input required="required" placeholder="Email" autofocus="autofocus" class="form-control text-field-box" type="email" value="" name="client[email]" id="client_email">
                        </div>

                        <div class="form-group">
                            <input required="required" autocomplete="off" placeholder="Password" class="form-control text-field-box" type="password" name="client[password]" id="client_password">
                        </div>

                        <div class=" row">
                            <div class="col-sm-12" style="margin:0 30px;">
                                <div class="checkbox ">
                                    <input name="client[remember_me]" type="hidden" value="0"><input type="checkbox" value="1" name="client[remember_me]" id="client_remember_me">
                                    <label for="client_remember_me">Remember me</label>
                                </div>
                                <a href="#" class="" style="float: right">Forgot your password?</a>
                            </div>
                        </div>
                        <div class="center">
                            <button  type="submit" class="btn btn-primary btn-lg " >Login</button>
                        </div>
                    </form>      </div>
                <br>
                <br>
                <p class="text-center">Don't have an account?
                    <a href="#">Sign up here</a>

                </p>
            </div>
        </div>
    </div>


@endsection