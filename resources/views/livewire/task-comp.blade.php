
<div>
    <h1>{{$name}}</h1>
    <ul>
    @foreach($task_array as $task)
        <li>{{$task}}</li>
    @endforeach
    </ul>
    <input type="text" wire:model="new_task">  <button wire:click="addNewTask">add task</button>
</div>
