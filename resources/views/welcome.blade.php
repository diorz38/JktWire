@extends('layouts.app')

@section('content')
@include('includes.navbar')
<div class="max-w-screen-xl mx-auto">
    <!-- Title -->
    <div class="mt-4 mx-2 md:flex justify-between items-center">
        <div class="">
            <h3 class="text-gray-600 text-sm">
                <a href="" class="text-green-600">
                    <i class="bx bx-home mr-1"></i>
                    Home
                </a>
                / Dashboard v1
            </h3>

            <div>
                <h1 class="text-2xl mt-1 font-medium">Performance Product</h1>
            </div>
        </div>

        <div class="md:pt-0 pt-4">
            <button
                class="px-4 py-2 border text-sm mx-1 border-transparent rounded bg-green-500 text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                <i class="bx bx-world text-white mr-2 text-base"></i>
                Publish
            </button>
            <button
                class="px-4 py-2 border text-sm mx-1 rounded bg-white hover:bg-gray-100 focus:outline-none focus:shadow-outline-white active:bg-white transition duration-150 ease-in-out inline-flex items-center">
                <i class="bx bx-plus text-gray-700 mr-2 text-base"></i>
                Create
            </button>
        </div>
    </div>
    <!-- End title -->

    <!-- Content -->
    <div class="mt-3 w-full">
        <!-- Content chart 1 -->
        <div class="mx-2">
            <livewire:users-table />
        </div>
    </div>
    <!-- End Content -->
</div>
<!-- Footer -->
@include('includes.footer')
</div>
@endsection
