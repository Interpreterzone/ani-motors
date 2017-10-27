@extends('crud.master.index')
@section('content')
    <section class="content">
    <div class="container-fluid">
        <div class="panel panel-default">
        <div class="panel-body">
            <p class="text-danger">All Client's <span class="text-bold"></span> List.</p>
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>User Name</th>
                    <th>Phone No</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Status</th>

                    <th>Edit</th>
                    <th>Delete</th>
                </tr>


                    <tr>
                        <td>1</td>
                        <td>Ahmad Khan</td>
                        <td>0336534543</td>
                        <td>6 road rtc etc</td>
                        <td>khan@gmail.com</td>
                        <td>active</td>


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