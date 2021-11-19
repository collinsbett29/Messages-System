@extends('layouts.app')

@section('content')
    @if (count($messages)>0)
    <ul class="list-group">
        @foreach($messages as $message)
            <li class="list-group-item"> 
                <strong>From:{{ $message->userFrom->name }}</strong> | Subject:{{ $message->subject }}
                <a href="{{ route('return', $message->id)  }}" class="btn btn-info btn-sm float-right">Undo message</a>
            </li>
        @endforeach
    </ul>
    @else
        No messages
    @endif
@endsection
