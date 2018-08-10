@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            @include('commons/errors')
{{--*****************************************************************************************************--}}
            <div class="panel panel-default">
                <div class="panel-heading">{{Auth::user()->name}}</div>

                <div class="panel-body">
                    <form method="post" action="{{url('notify')}}">
                        {!! csrf_field() !!}
                        <textarea cols="110" rows="2" placeholder="Whats In Your Mind?" name="message" class="form-control">
                            {{old('message')}}
                        </textarea>
                        <input class="btn btn-primary" type="submit" value="Notify">
                    </form>
                </div>
            </div>
 {{--*****************************************************************************************************--}}
            <div class="panel panel-default">
                <div class="panel-heading">Select</div>

                <div class="panel-body">
                    @if(!empty($notifications))
                        <div class="form-group">
                            <label for="sel1">Select list:</label>
                            <select class="form-control" id="sel1">
                                @foreach($notifications as $notification)
                                    <option class="option">
                                        {{$notification->message}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                    {{--@if (session('status'))--}}
                    {{--<div class="alert alert-success">--}}
                    {{--{{ session('status') }}--}}
                    {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                </div>
            </div>
{{--*****************************************************************************************************--}}
            <div class="panel panel-default">
                <div class="panel-heading">Data Table Show</div>
                <table id="example" class="display table" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
                    </tr>
                    </tbody>
                </table>
            </div>
{{--*****************************************************************************************************--}}
            <div class="panel panel-default">
                <div class="panel-heading">Data Table Input</div>
            <table id="example" class="display table" style="width:100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Position</th>
                    <th>Office</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td><input type="text" id="row-1-age" name="row-1-age" value="61"></td>
                    <td><input type="text" id="row-1-position" name="row-1-position" value="System Architect"></td>
                    <td><select size="1" id="row-1-office" name="row-1-office" class="form-control">
                            <option value="Edinburgh" selected="selected">
                                Edinburgh
                            </option>
                            <option value="London">
                                London
                            </option>
                            <option value="New York">
                                New York
                            </option>
                            <option value="San Francisco">
                                San Francisco
                            </option>
                            <option value="Tokyo">
                                Tokyo
                            </option>
                        </select></td>
                </tr>
                </tbody>
            </table>
            </div>
{{--*****************************************************************************************************--}}

        </div>
    </div>
</div>
@endsection
