@extends('master')

@section('title', 'Halaman Hell')

@section('content')

    @foreach ($fruits as $fruit)
        <li>

            {{ $fruit }}
        </li>
    @endforeach

    @for ($i = 0; $i > 5; $i++)
    @endfor

    <p>
        @php
            print_r($fruits);
        @endphp
    </p>


    <x-alert theme="danger" caption="ini Adalah alert Danger" closeable="true" />
    <x-alert theme="success" caption="ini adalah alert success" />
@stop
