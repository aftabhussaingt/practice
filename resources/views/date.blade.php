@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                @include('commons/errors')
                {{--*****************************************************************************************************--}}
                <div class="panel panel-default">
                    <div class="panel-heading">Showing Date</div>
                    {{--<form method="post" action="{{url('insert-sales')}}">--}}
                    {{--{{ csrf_field() }}--}}
                    <table id="example" class="display table" style="width:100%">
                        <thead>
                        <tr>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{date('d-m-Y', strtotime($sale->date))}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                {{--*****************************************************************************************************--}}
                <div class="panel panel-default">
                    <div class="panel-heading">Showing Date</div>
                    <form method="post" action="{{url('set-date')}}">
                    {{ csrf_field() }}
                    <table id="example" class="display table" style="width:100%">
                        <thead>
                        <tr>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input type="date" name="date" value="{{date('Y-m-d')}}"> </td>
                        </tr>
                        </tbody>
                    </table>
                        <input type="submit" class="btn btn-primary" value="submit">
                    </form>
                </div>
                {{--*****************************************************************************************************--}}
            </div>
        </div>
    </div>
@endsection
