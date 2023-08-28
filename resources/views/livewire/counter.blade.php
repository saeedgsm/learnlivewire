<div style="text-align: center">
    <livewire:test-example />
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
    <p>{{$name}}</p>
    <p>{{$family}}</p>

    <button wire:click="changeName">تعویض نام</button>
</div>
