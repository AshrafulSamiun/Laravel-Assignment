@extends('baseLayout')

@section('content')
    <div class="container bg-green-100 rounded shadow-md mx-auto px-4 py-8 md:w-1/3 md:mx-auto ">
        <div class="text-right mr-5 mb-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                <a href="{{ route('blogs.index') }}">Blog List</a>
            </button>
        </div>
        <h2 class="text-2xl font-bold mb-4">Create Blog</h2>
        <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $blog->title) }}"
                    class="w-full border rounded px-3 py-2" required>
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content</label>
                <textarea name="content" id="content" rows="5" class="w-full border rounded px-3 py-2"
                    required>{{ old('content', $blog->content) }}</textarea>
                @error('content')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                <select name="category_id" id="category_id" class="w-full border rounded px-3 py-2" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $blog->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="is_published" class="block text-sm font-medium text-gray-700 mb-1">Publish Status</label>
                <select name="is_published" id="is_published" class="w-full border rounded px-3 py-2" required>
                    <option value="1" {{ old('is_published', $blog->is_published) == 1 ? 'selected' : '' }}>Published</option>
                    <option value="0" {{ old('is_published', $blog->is_published) == 0 ? 'selected' : '' }}>Draft</option>
                </select>
                @error('is_published')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                Create Blog
            </button>
        </form>
    </div>
@endsection