@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                @include('commons/errors')
{{--*****************************************************************************************************--}}
                <div class="panel panel-default">
                    <div class="panel-heading">Data Table Show</div>
                    <table id="example" class="display table" style="width:100%">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Contractor</th>
                            <th>Amount</th>
                            <th>Company</th>
                            <th>Debt</th>
                            <th>Date</th>
                            <th>Fixed Date</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($sales as $sale)
                            <tr>
                                <td>{{$sale->id}}</td>
                                <td>{{$sale->contractor}}</td>
                                <td>{{$sale->amount}}</td>
                                <td>{{$sale->company}}</td>
                                <td>{{$sale->debt}}</td>
                                <td>{{date('d-m-Y', strtotime($sale->date))}}</td>
                                <td>{{date('d-m-Y', strtotime($sale->fixed_date))}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    {{$sales->links()}}
                </div>
 {{--*****************************************************************************************************--}}

            </div>
        </div>
    </div>
@endsection
