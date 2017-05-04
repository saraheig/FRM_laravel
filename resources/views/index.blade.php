@extends('layout')

@section('content')
<table>
    @foreach($tasks as $task)
        <tr>
            <td><a href="{{ route('model.show', ['id' => $task['id']]) }}">{{ $task['id'] }}</a></td>
            <!-- router = méthode de Laravel ; model.show = nom de ma route (cf. web.php) 
            Sinon, on peut également utiliser l'url --> 
            <td><a href="{{ url('model', ['id' => $task['id']]) }}">{{ $task['name'] }}</a></td>
            <td>{{ $task['duration'] }}</td>
        </tr>
    @endforeach
</table>
@endsection('content')