@extends('baseLayout')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="text-right mr-5 mb-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                <a href="{{ route('categories.create') }}">Add New Category </a>
            </button></button>
        </div>
        <h2 class="text-2xl font-bold mb-4">Category List</h2>

        <table class="min-w-full bg-white border">
            <thead>
                <tr class="bg-blue-400">
                    <th class="py-2 px-4 border-b text-center text-white">SL</th>
                    <th class="py-2 px-4 border-b text-center text-white">Name</th>
                    <th class="py-2 px-4 border-b text-center text-white">Slug</th>
                    <th class="py-2 px-4 border-b text-center text-white">Status</th>
                    <th class="py-2 px-4 border-b text-center text-white">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($b_category as $category)
                    <tr>
                        <td class="py-2 px-4 border-b text-center">
                            {{ $loop->iteration + ($b_category->currentPage() - 1) * $b_category->perPage() }}
                        </td>
                        <td class="py-2 px-4 border-b text-center">{{ $category->name }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $category->slug }}</td>
                        <td class="py-2 px-4 border-b text-center">
                            {{ $category->is_active ? 'Active' : 'Inactive' }}
                        </td>
                        <td class="py-2 px-4 border-b text-center">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                                <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
                            </button>

                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                class="inline-block ml-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $b_category->links() }}
        </div>
    </div>
@endsection