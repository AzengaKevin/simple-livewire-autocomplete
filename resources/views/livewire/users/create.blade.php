<form wire:submit.prevent="submit" class="space-y-4">
    <div class="form-group">
        <label for="user" class="block text-sm font-medium text-gray-900">Select User</label>
        <div class="flex flex-col mt-2">
            <input type="text" id="user" wire:model="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="Search user..." required>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">Submit</button>
    </div>
</form>
