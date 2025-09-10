@extends('baseLayout')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="text-right mr-5 mb-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                <a href="{{ route('blogs.create') }}">Add New Blog </a>
            </button></button>
        </div>
        <h2 class="text-2xl font-bold mb-4">Blog List</h2>

        <table class="min-w-full bg-white border">
            <thead>
                <tr class="bg-blue-400">
                    <th class="py-2 px-4 border-b text-center text-white">SL</th>
                    <th class="py-2 px-4 border-b text-center text-white">Title</th>
                    <th class="py-2 px-4 border-b text-center text-white">Content</th>
                    <th class="py-2 px-4 border-b text-center text-white">Category</th>
                    <th class="py-2 px-4 border-b text-center text-white">Published</th>
                    <th class="py-2 px-4 border-b text-center text-white">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td class="py-2 px-4 border-b text-center">
                            {{ $loop->iteration + ($blogs->currentPage() - 1) * $blogs->perPage() }}
                        </td>
                        <td class="py-2 px-4 border-b text-center">{{ $blog->title }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $blog->content }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $blog->category->name }}</td>
                        <td class="py-2 px-4 border-b text-center">
                            {{ $blog->is_published ? 'Published' : 'Draft' }}
                        </td>

                        <td class="py-2 px-4 border-b text-center">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                                <a href="{{ route('blogs.edit', $blog->id) }}">Edit</a>
                            </button>

                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="inline-block ml-2">
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
            {{ $blogs->links() }}
        </div>
    </div>
@endsection