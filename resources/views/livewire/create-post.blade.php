<div>
    <form wire:submit="formSubmit" class="flex flex-col space-y-3">
        <input wire:model="title" class="input" type="text" placeholder="Enter title">
        <textarea wire:model="content" class="input" rows="6" placeholder="Start typing your post here..."></textarea>

        <button type="submit" class="px-4 py-2 rounded-lg transition-shadow hover:shadow-md cursor-pointer font-medium bg-blue-200">Create Post</button>
    </form>
</div>
