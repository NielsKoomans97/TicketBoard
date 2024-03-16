@extends('components.page')

@section('content')
<table>
    <thead>
        <tr>Title</tr>
        <tr>User</tr>
    </thead>
    <tbody>
        @foreach($tickets as $ticket)
            <tr>
                <td>{{$ticket->title}}</td>
                <td>{{$ticket->user->name}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection