@extends('baseLayout')

@section('content')
    <div class="container mx-auto px-4 py-8 md:w-1/3 md:mx-auto ">
        <div class="text-right mr-5 mb-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                <a href="{{ route('categories.index') }}">Category List </a>
            </button></button>
        </div>
        <h2 class="text-2xl font-bold mb-4">Edit Category</h2>
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Category Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}"
                    class="w-full border rounded px-3 py-2" required>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="is_active" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <select name="is_active" id="is_active" class="w-full border rounded px-3 py-2" required>
                    <option value="1" {{ old('is_active', $category->is_active) == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('is_active', $category->is_active) == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('is_active')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                Update Category
            </button>
        </form>
    </div>
@endsection