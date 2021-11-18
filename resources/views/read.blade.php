@extends('layouts.app')

@section('content')
    From:{{ $message->userFrom->name }}
    <br>
    Email:{{ $message->userFrom->email }}
    <br>
    subject: {{ $message->subject }}
    <hr>
    Message
    <br>
    {{ $message->body }}
@endsection
