<div>

    <h1>Count: {{ $count }} </h1>
    <button wire:click="increment">+</button><br>
    <button wire:click="$refresh">Refresh</button>

    <button wire:click="refreshCounter">Refresh (Method)</button>

    <br>
    <br>

    <p><u>input with wire:click</u></p>

    <input type="text" wire:model.live="todo"> _ {{ $todo }} _ 
    <button type="button" wire:click="add">Add</button>
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }} </li>
        @endforeach
    </ul>

    <br>
    <br>
    <p><u>input with form submit</u></p>

    <form wire:submit="add">
        <input type="text" wire:model="todo">

        <button type="submit">Add</button>
        <ul>

            <ul>
                @foreach ($todos as $todo)
                    <li>{{ $todo }} </li>
                @endforeach
            </ul>

</div>