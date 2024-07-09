
<div class="modal fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75">
    <div class="modal-content bg-white rounded-lg p-6 shadow-lg w-full max-w-lg">
        <span class="close text-2xl cursor-pointer bg-red-700 text-white hover:text-white" wire:click="toggleModal">&times;</span>

        <form wire:submit.prevent="store" class="mt-4">
            <input type="hidden" wire:model="post_id">

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Title:</label>
                <input type="text" id="title" wire:model="title" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="body" class="block text-gray-700 font-medium mb-2">Body:</label>
                <textarea id="body" wire:model="body" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                @error('body') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white font-medium py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Save</button>

        </form>
    </div>
</div>

