
@extends('layouts.home')
@section('content')
<div class="containter">
    <h1 class="text-success"><u>services List</u></h1>
    <table class="table table-border table-hover">
        <thead>
        <tr>
            <th scope="col">Service Name</th>
            <th scope="col">Cost</th>
            <th scope="col">Duration</th>
            <th scope="col">Delivery Report</th>
        </tr>
        </thead>
        @foreach($services as $service)
            <tr>
                <td>{{$service->name}}</td>
                <td>{{$service->cost}}</td>
                <td>{{$service->duration}}</td>
                <td>{{$service->deliveryreport}}</td>
            </tr>
        @endforeach
    </table>
    </div>
@endsection