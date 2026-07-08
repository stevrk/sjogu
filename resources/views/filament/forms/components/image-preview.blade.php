@php
    // Get the image from the state or record
    $imagePath = $getState() ?? ($record->image ?? null);
    $imageUrl = $imagePath ? asset('storage/' . $imagePath) : null;
@endphp

@if($imageUrl)
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
            Current Image
        </label>
        <div class="relative w-48 h-48 rounded-lg overflow-hidden border border-gray-200 dark:border-gray-700">
            <img src="{{ $imageUrl }}" alt="Current Image" class="w-full h-full object-cover">
        </div>
    </div>
@endif