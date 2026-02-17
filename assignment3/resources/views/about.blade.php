@extends('layout')

@section('title', 'About Us')

@section('content')

    <h2 style="text-align:center;">About Us</h2>

    @php
        $name = "Secret Company";
        $services = ["Selling our products", "Delivery", "Maintenance"];
        $isOnline = true;
    @endphp

    @isset($name)
        <p>We at {{ $name }} offer a wide range of services</p>
    @endisset

    <h3>Services</h3>

    <ul>
        @foreach($services as $service)
            <li>{{ $service }}</li>
        @endforeach
    </ul>

    @if($isOnline)
        <p style="color:green;">Support team online</p>
    @else
        <p style="color:red;">Support team offline</p>
    @endif

    <a href="/" class="btn">Go Home</a>

@endsection
