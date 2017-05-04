<h1>Liste des tâches</h1>
<table>
    @foreach($tasks as $task)
        <tr>
            <td><a href="{{ route('tasks.show', ['id' => $task['id']]) }}">{{ $task['name'] }}</a></td>
            <td>{{ $task['done'] }}</td>
            <td>
                <form action="tasks.done" method="post" name="changerDone">
                    <input type="submit" value="Marqué comme fait">
                </form>
            </td>
        </tr>
    @endforeach
</table>