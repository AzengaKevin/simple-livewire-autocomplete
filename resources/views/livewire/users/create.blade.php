<form wire:submit.prevent="submit" class="space-y-4" x-data>
    <div class="form-group">
        <label for="user" class="block text-sm font-medium text-gray-900">Select User</label>
        <div class="mt-2 relative">
            <input type="text" id="user" wire:model="name" autocomplete="off" @focus="$wire.showSuggestions()"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Search user..." required>

            @if ($suggestionsFlag)
                <ul class="absolute z-10 bg-white w-full start-0 end-0 h-72 overflow-y-auto"
                    @click.outside="$wire.hideSuggestions()">
                    @if ($users->count())
                        @foreach ($users as $user)
                            <li class="border-b"><button type="button"
                                    wire:click.prevent="selectUser({{ $user->id }})"
                                    class="px-2.5 py-2 w-full text-start bg-gray-50 hover:bg-gray-100">{{ $user->name }}</button>
                            </li>
                        @endforeach
                    @else
                        <li><button type="button"
                                class="px-2.5 py-2 w-full text-start bg-gray-50 hover:bg-gray-100">Add
                                "{{ $name }}"</button></li>
                    @endif
                </ul>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label for="user" class="block text-sm font-medium text-gray-900">Some field</label>
        <livewire:autocomplete-field name="field" placeholder="Enter a value" class="mt-2" />
    </div>
    <div class="form-group">
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">Submit</button>
    </div>
</form>
