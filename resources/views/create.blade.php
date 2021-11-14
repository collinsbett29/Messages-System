@extends('layouts.app')

@section('content')
<form>
<div class="form-group">
        <label for="to">To</label>
        <select class="form-control" name="to" id="to">
            @foreach ($users as $user)
                <option value="$user->id">{{ $user->name }} , {{ $user->email }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="subject">subject</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject">
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <input type="text" class="form-control" id="message" name="message" placeholder="Enter message">
    </div>
    <div class="form-group">
        <label for="subject">subject</label>
        <input type="textarea" class="form-control" id="subject" name="subject" placeholder="Enter subject">
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection