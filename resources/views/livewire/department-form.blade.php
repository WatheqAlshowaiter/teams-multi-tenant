<div>
    <input type="text" wire:model="name" id="">
    <button wire:click="submit">Submit</button>

    @if ($success)
        <div>Saved</div>
    @endif
</div>
