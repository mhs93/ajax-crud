<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px justify-center">
            {{--<li class="me-2" >--}}
            <li @class(['active' => request('type') == 'category' || !(request('type'))]) >
                <a href="{{ route('dashboard') }}?type=category" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Category</a>
            </li>
            <li @class(['active' => request('type') == 'sub_category'])>
                <a href="{{ route('dashboard') }}?type=sub_category" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500" aria-current="page">Sub Category</a>
            </li>
            <li @class(['active' => request('type') == 'product'])>
                <a href="{{ route('dashboard') }}?type=product" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Product</a>
            </li>
            <li>
                <a class="inline-block p-4 text-gray-400 rounded-t-lg cursor-not-allowed dark:text-gray-500">Disabled</a>
            </li>
        </ul>
    </div>

    @switch(request('type'))
        @case('category')
        @include('category.list',[$data => $category])
        @break

        @case('sub_category')
        @include('subcategory.list')
        @break

        @case('product')
        @include('product.list')
        @break

        @default
        @include('category.list')
</x-app-layout>
