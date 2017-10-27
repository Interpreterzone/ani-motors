@extends('crud.master.index')
@section('content')
    <section class="content">
    <div class="container-fluid">
        <div class="panel panel-default">
        <div class="panel-body">
            <p class="text-danger">All Vehical's <span class="text-bold"></span> List.</p>
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Vehical Reg No</th>
                    <th>Make</th>
                    <th>Modle</th>
                    <th>Radio</th>
                    <th>Excess Miles</th>

                    <th>Edit</th>
                    <th>Delete</th>
                </tr>


                    <tr>
                        <td>1</td>
                        <td>ag456</td>
                        <td>Hona</td>
                        <td>95</td>
                        <td>yes</td>
                        <td>1234km</td>


                        <td>
                            <a href="#" id="">
                                <button class="btn btn-default"> Edit</button>
                            </a>
                        </td>
                        <td>
                            <a href="#" id="" class="">
                                <button class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>


            </table>
        </div>
    </div>
    </div>
    </section>
    @endsection