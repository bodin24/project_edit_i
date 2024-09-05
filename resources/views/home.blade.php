@extends('layout')
@section('title')
@endsection
@section('content')
@section('name_table')
    <div class="w-full text-blue-700 md:text-center text-2xl font-semibold">
        Employees
    </div>
@endsection

<div class="m-4 bg-white rounded-lg shadow-md">
    <div class="w-full p-4 overflow-x-auto max-h-screen">
      <table class="w-full border-collapse bg-white">
  
        {{-- name head  --}}
        <thead>
          <tr>
            <th class="border-b border-blue-200 bg-blue-100 p-4 text-left text-sm font-semibold text-blue-700">Name</th>
            <th class="border-b border-blue-200 bg-blue-100 p-4 text-left text-sm font-semibold text-blue-700">Full Name</th>
            <th class="border-b border-blue-200 bg-blue-100 p-4 text-left text-sm font-semibold text-blue-700">Email</th>
            <th class="border-b border-blue-200 bg-blue-100 p-4 text-left text-sm font-semibold text-blue-700">Number</th>
            <th class="border-b border-blue-200 bg-blue-100 p-4 text-left text-sm font-semibold text-blue-700">Description</th>
            <th class="border-b border-blue-200 bg-blue-100 p-4 text-left text-sm font-semibold text-blue-700">Address</th>
            <th class="border-b border-blue-200 bg-blue-100 p-4 text-left text-sm font-semibold text-blue-700">City</th>
            <th class="border-b border-blue-200 bg-blue-100 p-4 text-left text-sm font-semibold text-blue-700">Country</th>
            <th class="border-b border-blue-200 bg-blue-100 p-4 text-left text-sm font-semibold text-blue-700">Postal</th>
            <th class="border-b border-blue-200 bg-blue-100 p-4 text-left text-sm font-semibold text-blue-700">Status</th>
            <th class="border-b border-blue-200 bg-blue-100 p-4 text-left text-sm font-semibold text-blue-700">Edit</th>
            <th class="border-b border-blue-200 bg-blue-100 p-4 text-left text-sm font-semibold text-blue-700">Delete</th>
          </tr>
        </thead>
  
        {{-- content --}}
        <tbody>
          @foreach ($employees as $item)
          <tr class="hover:bg-blue-50 transition-colors duration-200">
            <td class="p-4 border-b border-blue-100 text-sm text-blue-800">{{$item->name}}</td>
            <td class="p-4 border-b border-blue-100 text-sm text-blue-800">{{$item->full_name}}</td>
            <td class="p-4 border-b border-blue-100 text-sm text-blue-800">{{$item->email}}</td>
            <td class="p-4 border-b border-blue-100 text-sm text-blue-800">{{$item->number}}</td>
            <td class="p-4 border-b border-blue-100 text-sm text-blue-800">{{$item->description}}</td>
            <td class="p-4 border-b border-blue-100 text-sm text-blue-800">{{$item->address}}</td>
            <td class="p-4 border-b border-blue-100 text-sm text-blue-800">{{$item->city}}</td>
            <td class="p-4 border-b border-blue-100 text-sm text-blue-800">{{$item->country}}</td>
            <td class="p-4 border-b border-blue-100 text-sm text-blue-800">{{$item->postal_code}}</td>
            <td class="p-4 border-b border-blue-100 text-sm">
              <span class="inline-block px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded">{{$item->status}}</span>
            </td>
            <td class="p-4 border-b border-blue-100 text-center">
              <a href="{{route('editData',$item->id)}}" class="text-blue-600 hover:text-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5 mx-auto">
                  <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
                </svg>
              </a>
            </td>
            <td class="p-4 border-b border-blue-100 text-center">
              <a href="{{route('deleteData',$item->id)}}" class="text-red-600 hover:text-red-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5 mx-auto">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M3.707 2.293a1 1 0 00-1.414 1.414L9.586 12 2.293 19.293a1 1 0 101.414 1.414L12 13.414l6.293 6.293a1 1 0 101.414-1.414L13.414 12l6.293-6.293a1 1 0 10-1.414-1.414L12 10.586 5.707 4.293a1 1 0 00-1.414-1.414z"
                    fill="currentColor" />
                </svg>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  


@endsection
