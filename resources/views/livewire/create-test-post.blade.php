<div>
<h2>New Post</h2>

<form wire:submit="save">
   <div>
    <label>
        <span>Title</span>
        <input type="text" wire:model="title">
        @error('title') <em>{{  $message }} </em> @enderror
    </label>
   </div>

   <div>
    <label>
        <span>Content</span>
        <textarea wire:model="content"></textarea>
        @error('content') <em>{{  $message }} </em> @enderror
    </label>
   </div>
    <button type="submit">Save</button>

</form>

<!-- using AlpineJS in side livewire -->
<div x-data="{ count: 0 }">
    <!-- Render the current "count" value inside an element... -->
    <h2 x-text="count"></h2>
 
    <!-- Increment the "count" value by "1" when a click event is dispatched... -->
    <button x-on:click="count++">Add More . . </button>
</div>

</div>
