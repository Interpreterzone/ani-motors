@extends('client.master.index')
@section('custom')
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="login-signup col-sm-10 col-sm-push-1 col-md-6 col-md-push-3">
                <div class="login-signup__top no-margin">
                    <h2 class="login-signup__heading">Sign up to create your Ani
                        Motors                  account</h2>
                </div>
                <div class="panel-body sign-up">

                    <form class="new_client" id="new_client" action="/clients" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="ozhXmXfuKx4oeVaJIwZcCk15BqKradWKprrgz8D063bq+dFfzYqH1adkHqxgMY+Gl8lkeQUfIW/OQTBfaEJfKA==">
                        <div class="row ">
                            <div class="col-sm-6 form-group">
                                <input  class=" hidden " id="is-driver-radio" type="radio" value="car rental" checked="checked" name="client[sign_up_intention]">
                                <label class="btn btn-primary  selected" >I want to rent</label>
                            </div>
                            <div class="col-sm-6  form-group">
                                <input class=" hidden" id="is-owner-radio" type="radio" value="vehicle owner" name="client[sign_up_intention]">
                                <label class="btn btn-white" for="client_sign_up_intention">I am a fleet owner</label>
                            </div>
                            <div class="col-sm-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 form-group rent-car-options radio">
                                <div class="radio">
                                    <input  type="radio" value="car rental" checked="checked" name="client[sign_up_intention]" id="client_sign_up_intention_car_rental">
                                    <label for="client_sign_up_intention">I want to rent a PCO vehicle</label>
                                </div>
                                <div class="radio">
                                    <input  type="radio" value="van rental as individual" name="client[sign_up_intention]" id="client_sign_up_intention_van_rental_as_individual">
                                    <label for="client_sign_up_intention">I want to rent a van</label>
                                </div>
                            </div>
                        </div>

                        <div class="row name-row">
                            <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                    <label for="client_first_name">First Name</label>
                                    <input autofocus="autofocus" required="required" class="form-control" id="first_name" type="text" name="client[first_name]">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                    <label for="client_last_name">Last Name</label>
                                    <input autofocus="autofocus" required="required" class="form-control" id="last_name" type="text" name="client[last_name]">
                                </div>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="client_first_name">Phone</label>
                            <input autofocus="autofocus" required="required" class="form-control" id="phone" type="text" name="client[phone]">
                        </div>

                        <div class="form-group has-feedback">
                            <label for="client_email">Email</label>
                            <input autofocus="autofocus" required="required" class="form-control" id="email" type="email" value="" name="client[email]">
                        </div>

                        <div class="form-group has-feedback">
                            <label for="client_password">Password</label>
                            <input autocomplete="off" required="required" class="form-control" id="password" pattern=".{8,}" oninvalid="setCustomValidity('Password must be at least 8 characters long')" onchange="try{setCustomValidity('')}catch(e){}" type="password" name="client[password]">
                        </div>

                        <div class="form-group">
                            <label for="client_first_name">How did you hear about us?</label>
                            <select required="required" class="form-control" name="client[how_did_you_hear_about_us]" id="client_how_did_you_hear_about_us"><option value="">Please select...</option>
                                <option value="Radio">Radio</option>
                                <option value="Uber Marketplace">Uber Marketplace</option>
                                <option value="Facebook group">Facebook group</option>
                                <option value="Gumtree">Gumtree</option>
                                <option value="Family / friend">Family / friend</option>
                                <option value="Google search">Google search</option>
                                <option value="Facebook advertising">Facebook advertising</option>
                                <option value="PCO magazine">PCO magazine</option></select>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="client_referred_by_code">Referral code</label>
                            <input autocomplete="off" class="form-control" id="referral_code" type="text" name="client[referred_by_code]">
                        </div>

                        <div class="login-signup__bottom">
                            <div class="checkbox">
                                <input name="client[terms]" type="hidden" value="0"><input required="required" type="checkbox" value="1" name="client[terms]" id="client_terms">
                                <label for="client_terms">I agree with Drover's <a href="#" target="_blank">Terms of Service</a></label>
                            </div>
                        </div>

                        <div class="login-signup__submit">
                            <input type="submit" name="commit" value="Proceed to Step 2" class="btn btn-primary btn-lg" id="signup-button">
                        </div>
                    </form>        </div>
            </div>
        </div>
    </div>
@endsection