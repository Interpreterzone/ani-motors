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
                                VEHICLE HIRE RATES AND CHARGES
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
                                            <input type="text" class="form-control date" placeholder="32.HIRE START DATE:">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="33 .END DATE:">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">send</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="34.VEHICLE RETURN DATE:">
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
                                            <input type="text" class="form-control date" placeholder="35. PER WEEK">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">

                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="36. DEPOSIT">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">send</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="37. FUEL">
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
                                            <input type="text" class="form-control date" placeholder="38. OTHER FEES">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">

                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="39. EXCESS MILES">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">send</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="40. SUBTOTAL">
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
                                            <input type="text" class="form-control date" placeholder="38. TOTAL PAID ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">

                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="39. TOTAL DUE">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">send</i>
                                        </span>
                                    </div>
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