<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px justify-center">
            <li class="mr-2">
                <a href="{{ route('dashboard', ['type' => 'category']) }}"
                   class="inline-block p-4 border-b-2 rounded-t-lg {{ ($type ?? 'category') === 'category' ? 'text-blue-600 border-blue-600 dark:text-blue-500 dark:border-blue-500' : 'border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300' }}">
                    Category
                </a>
            </li>
            <li class="mr-2">
                <a href="{{ route('dashboard', ['type' => 'sub_category']) }}"
                   class="inline-block p-4 border-b-2 rounded-t-lg {{ ($type ?? '') === 'sub_category' ? 'text-blue-600 border-blue-600 dark:text-blue-500 dark:border-blue-500' : 'border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300' }}">
                    Sub Category
                </a>
            </li>
            <li>
                <a href="{{ route('dashboard', ['type' => 'product']) }}"
                   class="inline-block p-4 border-b-2 rounded-t-lg {{ ($type ?? '') === 'product' ? 'text-blue-600 border-blue-600 dark:text-blue-500 dark:border-blue-500' : 'border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300' }}">
                    Product
                </a>
            </li>
        </ul>
    </div>



@switch($type ?? 'category')
    @case('category')
    @include('category.list', ['categories' => $categories])
    @break

    @case('sub_category')
    @include('subcategory.list', ['sub_categories' => $sub_categories])
    @break

    @case('product')
    @include('product.list', ['products' => $products])
    @break

    @default
    @include('category.list', ['categories' => $categories])
    @endswitch
</x-app-layout>
