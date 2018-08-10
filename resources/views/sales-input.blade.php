@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                @include('commons/errors')
                {{--*****************************************************************************************************--}}
                <div class="panel panel-default">
                    <div class="panel-heading">Data Table Input</div>
                    <form method="post" action="{{url('insert-sales')}}">
                        {{ csrf_field() }}
                    <table id="example" class="display table" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Contractor</th>
                            <th>Amount</th>
                            <th>Company</th>
                            <th>Debt</th>
                            <th>Date</th>
                            <th>Fixed Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td><input type="text" name="name1" value="123" readonly></td>
                            <td><select size="1" name="name2" class="form-control">
                                    <option selected="selected" disabled>Pick a size...</option>
                                    @foreach($sales as $sale)
                                        <option value="{{$sale->company}}">
                                            {{$sale->company}}
                                        </option>
                                    @endforeach
                                </select>
                            </td>

                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        </tbody>
                    </table>
                        <div style="float: right">
                            <input type="submit" value="Submit" class="btn btn-primary">
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                </div>
                {{--*****************************************************************************************************--}}
        </div>
    </div>
    </div>
@endsection
