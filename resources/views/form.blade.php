@extends('layout')
@section('title')
@endsection
@section('content')
@section('name_table')
    <div class="w-full text-gray-700 md:text-center text-2xl font-semibold">
        Add Data
    </div>
@endsection

<form action="{{ route('addData') }}" method="POST" class="mx-auto max-w-xl">

    @if ($errors->any())
        <div class="flex justify-center text-red-500">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @csrf
    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
        <div>
            <label for="name" class="block text-sm font-semibold text-black">Name</label>
            <div class="mt-2.5">
                <input type="text" name="name" id="name" 
                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-blue-500 ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div>
            <label for="full_name" class="block text-sm font-semibold text-black">Full Name</label>
            <div class="mt-2.5">
                <input type="text" name="full_name" id="full_name" 
                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-blue-500 ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div>
            <label for="postal_code" class="block text-sm font-semibold text-black">Postal</label>
            <div class="mt-2.5">
                <input type="text" name="postal_code" id="postal_code" 
                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-blue-500 ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div>
            <label for="city" class="block text-sm font-semibold text-black">City</label>
            <div class="mt-2.5">
                <input type="text" name="city" id="city" 
                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-blue-500 ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="email" class="block text-sm font-semibold text-black">Email</label>
            <div class="mt-2.5">
                <input type="email" name="email" id="email" 
                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-blue-500 ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="address" class="block text-sm font-semibold text-black">Address</label>
            <div class="mt-2.5">
                <input type="text" name="address" id="address" 
                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-blue-500 ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="status" class="block text-sm font-semibold text-black">Status</label>
            <div class="relative mt-2.5">
                <select id="status" name="status" 
                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-blue-500 ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="number" class="block text-sm font-semibold text-green-600">Country and Number</label>
            <div class="relative mt-2.5">
                <div class="absolute inset-y-0 left-0 flex items-center">
                    <label for="country" class="sr-only">Country</label>
                    <select id="country" name="country" 
                            class="h-full rounded-md border-0 bg-transparent py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                        <option>United States</option>
                        <option>Thailand</option>
                        <option>China</option>
                        <option>Hong Kong</option>
                        <option>United Kingdom</option>
                    </select>
                    <svg class="pointer-events-none absolute right-3 top-0 h-full w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" 
                              d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" 
                              clip-rule="evenodd" />
                    </svg>
                </div>
                <input type="number" name="number" id="number" 
                       class="block w-full rounded-md border-0 px-3.5 py-2 pl-40 text-gray-900 shadow-sm shadow-blue-500 ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="description" class="block text-sm font-semibold text-green-600">Description</label>
            <div class="mt-2.5">
                <textarea name="description" id="description" rows="4" 
                          class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-blue-500 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
        </div>

        <div class="mt-10">
            <button type="submit" 
                    class="block w-full rounded-md bg-cyan-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </div>
</form>

@endsection
