@extends('layout')
@section('layout')
    {{-- @foreach ($data as $item)
        @foreach ($item as $ite)
            {{ $ite }}
        @endforeach
    @endforeach --}}
    @foreach ($data as $item)
        {{$item}}
    @endforeach
@endsection