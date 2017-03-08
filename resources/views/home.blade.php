@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <h2> Wyeth Promil Dashboard </h2>

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
                </tr>
                </thead>
                <tbody>
                @foreach($census as $c)
                    <tr>
                        <td>{{ $c->name }}</td>
                        <td>{{ $c->age }}</td>
                        <td>{{ $c->mobile }}</td>
                        <td>{{ $c->email }}</td>
                        <td>{{ $c->promo_crayola_bunding }}</td>
                        <td>{{ $c->promo_zip_it }}</td>
                        <td>{{ $c->promo_none }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
