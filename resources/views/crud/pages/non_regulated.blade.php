@extends('crud.master.index')
@section('content')
    <section class="content">

        <div class="container-fluid">
            <div class="block-header">
                <h2>HIRE AGREEMENT</h2>
            </div>

            <!-- Input Group -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                NON-REGULATED HIRE AGREEMENT
                            </h2>

                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="1. VEHICLE REG. NO">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="2. MAKE">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">send</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="3.MODEL">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="4. TOOLS">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">

                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="5. RADIO">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">send</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="6.SPARES">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="7. FUEL">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">

                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="7.1. GROUP">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">send</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Client DOB:">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="11. EXCESS MILES ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">

                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="AGREEMENT NO">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">send</i>
                                        </span>
                                    </div>
                                </div>
                            </div>



                            <div class="row ">
                                <div class="col-md-4">
                                            <button class="btn-primary btn-lg">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input Group -->

        </div>
    </section>
@stop