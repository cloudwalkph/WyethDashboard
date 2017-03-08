@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
               <div class="panel-heading text-center">
                   <h2> Wyeth Promil Dashboard </h2>
               </div>
                <div class="panel-body">
                    <table class="table table-hover" id="myTable">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Promo Crayola Bunding</th>
                            <th>Promo Zip It</th>
                            <th>Promo None</th>
                            <th>Date Inputted</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($census as $c)
                            <tr>
                                <td>{{ $c->name }}</td>
                                <td>{{ $c->age }}</td>
                                <td>{{ $c->mobile }}</td>
                                <td>{{ $c->email }}</td>
                                <td>{{ $c->parseBooleanCrayola() }}</td>
                                <td>{{ $c->parseBooleanZipIt() }}</td>
                                <td>{{ $c->parseBooleanNone() }}</td>
                                <td>{{ $c->created }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
