<div>
    <div class="min-w-full overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="table-header">
                    <th class="px-6 py-3 text-left font-semibold">#</th>
                    <th class="px-6 py-3 text-left font-semibold">Name</th>
                    <th class="px-6 py-3 text-left font-semibold">Email</th>
                    <th class="px-6 py-3 text-left font-semibold">Created</th>
                    <th class="px-6 py-3 text-left font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ $user->name }}</td>
                        <td class="px-6 py-4">{{ $user->email }}</td>
                        <td class="px-6 py-4">{{ $user->created_at->toDateString() }}</td>
                        <td>
                            <div class="flex flex-wrap gap-2">
                                <a href="#"
                                    class="text-gray-500 hover:text-gray-700 hover:underline font-medium">Details</a>
                                <a href="#"
                                    class="text-blue-500 hover:text-blue-700 hover:underline font-medium">Edit</a>
                                <a href="#"
                                    class="text-red-500 hover:text-red-700 hover:underline font-medium">Delete</a>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4">No user results</td>
                    </tr>
                @endforelse
                @if ($users->count())
                    <td colspan="5" class="px-6 py-4">{{ $users->links() }}</td>
                @endif
            </tbody>
        </table>
    </div>
</div>
