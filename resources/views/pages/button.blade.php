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
                /

                <a href="" class="text-green-600"> Component </a> / Button
            </h3>

            <div>
                <h1 class="text-2xl mt-1 font-medium">Button</h1>
            </div>
        </div>
    </div>
    <!-- End title -->

    <!-- Content -->
    <div class="mt-3">
        <div class="flex flex-wrap">
            <div class="w-full">
                <!-- Card  -->
                <div class="bg-white m-2 border rounded-md">
                    <!-- Card header -->
                    <div class="border-b px-4 py-2">
                        <h1 class="text-base font-medium text-gray-700">
                            Button Standard
                        </h1>
                    </div>
                    <!-- End Card header -->

                    <!-- Card body -->
                    <div class="px-3 py-2">
                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-green-600 text-white hover:bg-green-500 focus:outline-none focus:border-green-600 focus:shadow-outline-green active:bg-green-600 transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-blue-600 text-white hover:bg-blue-500 focus:outline-none focus:border-blue-600 focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-yellow-600 text-white hover:bg-yellow-500 focus:outline-none focus:border-yellow-600 focus:shadow-outline-yellow active:bg-yellow-600 transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-red-600 text-white hover:bg-red-500 focus:outline-none focus:border-red-600 focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-purple-600 text-white hover:bg-purple-500 focus:outline-none focus:border-purple-600 focus:shadow-outline-purple active:bg-purple-600 transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>

                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-indigo-600 text-white hover:bg-indigo-500 focus:outline-none focus:border-indigo-600 focus:shadow-outline-indigo active:bg-indigo-600 transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-pink-600 text-white hover:bg-pink-500 focus:outline-none focus:border-pink-600 focus:shadow-outline-pink active:bg-pink-600 transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>

                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-gray-800 text-white hover:bg-gray-700 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray active:bg-gray-800 transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-gray-600 text-white hover:bg-gray-500 focus:outline-none focus:border-gray-600 focus:shadow-outline-gray active:bg-gray-600 transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-gray-400 text-gray-700 hover:bg-gray-300 focus:outline-none focus:border-gray-400 focus:shadow-outline-gray active:bg-gray-400 transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>

                        <button
                            class="px-4 py-2 text-sm border rounded bg-gray-200 text-gray-700 hover:bg-gray-100 focus:outline-none focus:border-gray-200 focus:shadow-outline-gray active:bg-gray-200 transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>

                        <button
                            class="px-4 py-2 text-sm font-medium text-blue-700 active:text-blue-700 hover:text-blue-400 focus:outline-none focus:shadow-outline-white transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                    </div>
                    <!-- End Card body -->
                </div>
                <!-- End Card -->
            </div>

            <div class="w-full">
                <!-- Card  -->
                <div class="bg-white m-2 border rounded-md">
                    <!-- Card header -->
                    <div class="border-b px-4 py-2">
                        <h1 class="text-base font-medium text-gray-700">
                            Button Light
                        </h1>
                    </div>
                    <!-- End Card header -->

                    <!-- Card body -->
                    <div class="px-3 py-2">
                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-green-500 text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-blue-500 text-white hover:bg-blue-400 focus:outline-none focus:border-blue-500 focus:shadow-outline-blue active:bg-blue-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-yellow-500 text-white hover:bg-yellow-400 focus:outline-none focus:border-yellow-500 focus:shadow-outline-yellow active:bg-yellow-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-red-500 text-white hover:bg-red-400 focus:outline-none focus:border-red-500 focus:shadow-outline-red active:bg-red-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-purple-500 text-white hover:bg-purple-400 focus:outline-none focus:border-purple-500 focus:shadow-outline-purple active:bg-purple-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>

                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-indigo-500 text-white hover:bg-indigo-400 focus:outline-none focus:border-indigo-500 focus:shadow-outline-indigo active:bg-indigo-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>

                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-pink-500 text-white hover:bg-pink-400 focus:outline-none focus:border-pink-500 focus:shadow-outline-purple active:bg-pink-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>

                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-gray-700 text-white hover:bg-gray-600 focus:outline-none focus:border-gray-700 focus:shadow-outline-gray active:bg-gray-700 transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>

                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-gray-500 text-white hover:bg-gray-400 focus:outline-none focus:border-gray-500 focus:shadow-outline-gray active:bg-gray-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-gray-300 text-gray-600 hover:bg-gray-200 focus:outline-none focus:border-gray-300 focus:shadow-outline-gray active:bg-gray-300 transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>

                        <button
                            class="px-4 py-2 text-sm border border-gray-400 rounded bg-white hover:bg-gray-100 focus:outline-none focus:shadow-outline-white active:bg-white transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>

                        <button
                            class="px-4 active:text-blue-500 py-2 text-sm mx-1 font-medium text-blue-500 hover:text-blue-300 focus:outline-none focus:shadow-outline-white transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                    </div>
                    <!-- End Card body -->
                </div>
            </div>
            <div class="w-full">
                <!-- Card  -->
                <div class="bg-white m-2 border rounded-md">
                    <!-- Card header -->
                    <div class="border-b px-4 py-2">
                        <h1 class="text-base font-medium text-gray-700">
                            Button Outline
                        </h1>
                    </div>
                    <!-- End Card header -->

                    <!-- Card body -->
                    <div class="px-3 py-2">
                        <button
                            class="px-4 py-2 text-sm border border-green-600 rounded text-green-600 hover:bg-green-500 focus:outline-none focus:border-green-600 focus:shadow-outline-green active:bg-green-600 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-blue-600 rounded text-blue-600 hover:bg-blue-500 focus:outline-none focus:border-blue-600 focus:shadow-outline-blue active:bg-blue-600 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-yellow-600 rounded text-yellow-600 hover:bg-yellow-500 focus:outline-none focus:border-yellow-600 focus:shadow-outline-yellow active:bg-yellow-600 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-red-600 rounded text-red-600 hover:bg-red-500 focus:outline-none focus:border-red-600 focus:shadow-outline-red active:bg-red-600 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-purple-600 rounded text-purple-600 hover:bg-purple-500 focus:outline-none focus:border-purple-600 focus:shadow-outline-purple active:bg-purple-600 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>

                        <button
                            class="px-4 py-2 text-sm border border-indigo-600 rounded text-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-600 focus:shadow-outline-indigo active:bg-indigo-600 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-pink-600 rounded text-pink-600 hover:bg-pink-500 focus:outline-none focus:border-pink-600 focus:shadow-outline-pink active:bg-pink-600 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>

                        <button
                            class="px-4 py-2 text-sm border border-gray-800 rounded text-gray-800 hover:bg-gray-700 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray active:bg-gray-800 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-gray-600 rounded text-gray-600 hover:bg-gray-500 focus:outline-none focus:border-gray-600 focus:shadow-outline-gray active:bg-gray-600 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-gray-400 rounded text-gray-700 hover:bg-gray-300 focus:outline-none focus:border-gray-400 focus:shadow-outline-gray active:bg-gray-400 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center m-1">
                            Button
                        </button>
                    </div>
                    <!-- End Card body -->
                </div>
                <!-- End Card -->
            </div>

            <div class="w-full">
                <!-- Card  -->
                <div class="bg-white m-2 border rounded-md">
                    <!-- Card header -->
                    <div class="border-b px-4 py-2">
                        <h1 class="tetext-base font-medium text-gray-700">
                            Button Disabled
                        </h1>
                    </div>
                    <!-- End Card header -->

                    <!-- Card body -->
                    <div class="px-3 py-2">
                        <button disabled=""
                            class="px-4 py-2 text-sm border border-transparent rounded bg-green-600 text-white focus:outline-none inline-flex items-center opacity-50 cursor-not-allowed m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-blue-600 text-white focus:outline-none inline-flex items-center opacity-50 cursor-not-allowed m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-yellow-600 text-white focus:outline-none inline-flex items-center opacity-50 cursor-not-allowed m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-red-600 text-white focus:outline-none inline-flex items-center opacity-50 cursor-not-allowed m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-purple-600 text-white focus:outline-none inline-flex items-center opacity-50 cursor-not-allowed m-1">
                            Button
                        </button>

                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-indigo-600 text-white focus:outline-none inline-flex items-center opacity-50 cursor-not-allowed m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-pink-600 text-white focus:outline-none inline-flex items-center opacity-50 cursor-not-allowed m-1">
                            Button
                        </button>

                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-gray-800 text-white focus:outline-none inline-flex items-center opacity-50 cursor-not-allowed m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-gray-600 text-white focus:outline-none inline-flex items-center opacity-50 cursor-not-allowed m-1">
                            Button
                        </button>
                        <button
                            class="px-4 py-2 text-sm border border-transparent rounded bg-gray-400 text-gray-700 focus:outline-none inline-flex items-center opacity-50 cursor-not-allowed m-1">
                            Button
                        </button>

                        <button
                            class="px-4 py-2 text-sm border rounded bg-gray-200 text-gray-700 focus:outline-none inline-flex items-center opacity-50 cursor-not-allowed m-1">
                            Button
                        </button>

                        <button
                            class="px-4 py-2 text-sm font-medium text-blue-700 focus:outline-none inline-flex items-center opacity-50 cursor-not-allowed m-1">
                            Button
                        </button>
                    </div>
                    <!-- End Card body -->
                </div>
                <!-- End Card -->
            </div>

            <div class="md:w-1/2 w-full">
                <!-- Card -->
                <div class="bg-white m-2 border rounded-md">
                    <!-- Card header -->
                    <div class="border-b px-4 py-2">
                        <h1 class="tetext-base font-medium text-gray-700 inline-block">
                            Button Icon
                        </h1>
                        <span class="text-xs text-gray-600">source icon
                            <i><a href="https://boxicons.com/" class="text-blue-600" target="_blank"
                                    rel="noopener noreferrer">https://boxicons.com/</a></i></span>
                    </div>
                    <!-- End Card header -->

                    <!-- Card body -->
                    <div class="px-3 py-2">
                        <div>
                            <button
                                class="px-4 py-2 text-sm border border-transparent rounded bg-green-500 text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                                <i class="bx bx-world text-white mr-2 text-base"></i>
                                Button
                            </button>
                            <button
                                class="px-4 py-2 text-sm border border-transparent rounded bg-blue-500 text-white hover:bg-blue-400 focus:outline-none focus:border-blue-500 focus:shadow-outline-blue active:bg-blue-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                                <i class="bx bx-edit text-white mr-2 text-base"></i>
                                Button
                            </button>
                            <button
                                class="px-4 py-2 text-sm border border-transparent rounded bg-red-500 text-white hover:bg-red-400 focus:outline-none focus:border-red-500 focus:shadow-outline-blue active:bg-red-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                                <i class="bx bx-x text-white mr-2 text-base"></i>
                                Button
                            </button>
                            <button
                                class="px-4 py-2 text-sm border border-transparent rounded bg-yellow-500 text-white hover:bg-yellow-400 focus:outline-none focus:border-yellow-500 focus:shadow-outline-blue active:bg-yellow-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                                <i class="bx bx-award text-white mr-2 text-base"></i>
                                Button
                            </button>
                            <button
                                class="px-4 py-2 border border-gray-400 text-sm mx-1 rounded bg-white hover:bg-gray-100 focus:outline-none focus:shadow-outline-white active:bg-white transition duration-150 ease-in-out inline-flex items-center">
                                <i class="bx bx-bookmark text-gray-700 mr-2 text-base"></i>
                                Button
                            </button>
                        </div>
                        <div>
                            <button
                                class="px-4 py-2 text-sm border border-green-600 rounded text-green-600 hover:bg-green-500 focus:outline-none focus:border-green-600 focus:shadow-outline-green active:bg-green-600 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center m-1">
                                <i class="bx bx-world mr-2 text-base"></i>
                                Button
                            </button>

                            <button
                                class="px-4 py-2 text-sm border border-red-600 rounded text-red-600 hover:bg-red-500 focus:outline-none focus:border-red-600 focus:shadow-outline-red active:bg-red-600 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center m-1">
                                <i class="bx bx-x mr-2 text-base"></i>
                                Button
                            </button>
                            <button
                                class="px-4 py-2 text-sm border border-yellow-600 rounded text-yellow-600 hover:bg-yellow-500 focus:outline-none focus:border-yellow-600 focus:shadow-outline-yellow active:bg-yellow-600 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center m-1">
                                <i class="bx bx-line-chart-down mr-2 text-base"></i>
                                Button
                            </button>
                            <button
                                class="px-4 py-2 text-sm border border-gray-600 rounded text-gray-700 hover:bg-gray-600 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-gray-700 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center m-1">
                                <i class="bx bx-bookmark mr-2 text-base"></i>
                                Button
                            </button>
                        </div>

                        <div>
                            <button
                                class="px-3 py-2 text-sm border border-transparent rounded bg-green-500 text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                                <i class="bx bx-world text-white text-base"></i>
                            </button>
                            <button
                                class="px-3 py-2 text-sm border border-transparent rounded bg-blue-500 text-white hover:bg-blue-400 focus:outline-none focus:border-blue-500 focus:shadow-outline-blue active:bg-blue-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                                <i class="bx bx-edit text-white text-base"></i>
                            </button>
                            <button
                                class="px-3 py-2 text-sm border border-transparent rounded bg-red-500 text-white hover:bg-red-400 focus:outline-none focus:border-red-500 focus:shadow-outline-blue active:bg-red-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                                <i class="bx bx-x text-white text-base"></i>
                            </button>
                            <button
                                class="px-3 py-2 text-sm border border-transparent rounded bg-yellow-500 text-white hover:bg-yellow-400 focus:outline-none focus:border-yellow-500 focus:shadow-outline-blue active:bg-yellow-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                                <i class="bx bx-award text-white text-base"></i>
                            </button>
                            <button
                                class="px-3 py-2 border border-gray-400 text-sm mx-1 rounded bg-white hover:bg-gray-100 focus:outline-none focus:shadow-outline-white active:bg-white transition duration-150 ease-in-out inline-flex items-center">
                                <i class="bx bx-bookmark text-gray-700 text-base"></i>
                            </button>
                            <button
                                class="px-3 py-2 text-sm border border-green-600 rounded text-green-600 hover:bg-green-500 focus:outline-none focus:border-green-600 focus:shadow-outline-green active:bg-green-600 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center m-1">
                                <i class="bx bx-world text-base"></i>
                            </button>

                            <button
                                class="px-3 py-2 text-sm border border-red-600 rounded text-red-600 hover:bg-red-500 focus:outline-none focus:border-red-600 focus:shadow-outline-red active:bg-red-600 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center m-1">
                                <i class="bx bx-x text-base"></i>
                            </button>
                            <button
                                class="px-3 py-2 text-sm border border-gray-600 rounded text-gray-700 hover:bg-gray-600 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-gray-700 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center m-1">
                                <i class="bx bx-bookmark text-base"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md:w-1/2 w-full">
                <!-- Card -->
                <div class="bg-white m-2 border rounded-md">
                    <!-- Card header -->
                    <div class="border-b px-4 py-2">
                        <h1 class="tetext-base font-medium text-gray-700 inline-block">
                            Button Group
                        </h1>
                    </div>
                    <!-- End Card header -->

                    <!-- Card body -->
                    <div class="px-3 py-2">
                        <div class="inline-flex m-1">
                            <button
                                class="px-4 py-2 text-sm border border-transparent bg-green-500 rounded-none rounded-l text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                                Prev
                            </button>
                            <button
                                class="px-4 py-2 text-sm border border-transparent bg-green-500 rounded-none rounded-r text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                                Next
                            </button>
                        </div>
                        <div class="inline-flex m-1">
                            <button
                                class="px-4 py-2 text-sm border border-transparent bg-green-500 rounded-none rounded-l text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                                <i class="bx bxs-chevron-left mr-2 text-base"></i>
                                Prev
                            </button>
                            <button
                                class="px-4 py-2 text-sm border border-transparent bg-green-500 rounded-none rounded-r text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                                Next
                                <i class="bx bxs-chevron-right ml-2 text-base"></i>
                            </button>
                        </div>
                        <div class="inline-flex m-1">
                            <button
                                class="px-4 py-2 text-sm border border-r-0 border-green-600 rounded-none rounded-l text-green-600 hover:bg-green-500 focus:outline-none focus:border-green-600 focus:shadow-outline-green active:bg-green-600 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center">
                                Prev
                            </button>
                            <button
                                class="px-4 py-2 text-sm border rounded-none border-green-600 rounded-r text-green-600 hover:bg-green-500 focus:outline-none focus:border-green-600 focus:shadow-outline-green active:bg-green-600 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center">
                                Next
                            </button>
                        </div>

                        <div class="inline-flex m-1">
                            <button
                                class="px-4 py-2 text-sm border border-transparent bg-green-500 rounded-none rounded-l text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                                <i class="bx bxs-chevron-left mr-2 text-base"></i>
                                Prev
                            </button>

                            <button
                                class="px-4 py-2 text-sm border border-transparent rounded-none text-white active:bg-green-600 focus:outline-none focus:border-green-500 focus:shadow-outline-green bg-green-400 transition duration-150 ease-in-out inline-flex items-center">
                                1
                            </button>

                            <button
                                class="px-4 py-2 text-sm border border-transparent bg-green-500 rounded-none text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                                2
                            </button>
                            <button
                                class="px-4 py-2 text-sm border border-transparent bg-green-500 rounded-none rounded-r text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                                Next
                                <i class="bx bxs-chevron-right ml-2 text-base"></i>
                            </button>
                        </div>

                        <div class="inline-flex m-1">
                            <button
                                class="px-4 py-2 text-sm border border-r-0 border-green-600 rounded-none rounded-l text-green-600 hover:bg-green-500 focus:outline-none focus:border-green-600 focus:shadow-outline-green active:bg-green-600 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center">
                                <i class="bx bxs-chevron-left mr-2 text-base"></i>
                                Prev
                            </button>
                            <button
                                class="px-4 py-2 text-sm border border-r-0 border-green-600 rounded-none text-white bg-green-500 focus:outline-none focus:border-green-600 focus:shadow-outline-green active:bg-green-600 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center">
                                1
                            </button>
                            <button
                                class="px-4 py-2 text-sm border border-r-0 border-green-600 rounded-none text-green-600 hover:bg-green-500 focus:outline-none focus:border-green-600 focus:shadow-outline-green active:bg-green-600 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center">
                                2
                            </button>
                            <button
                                class="px-4 py-2 text-sm border rounded-none border-green-600 rounded-r text-green-600 hover:bg-green-500 focus:outline-none focus:border-green-600 focus:shadow-outline-green active:bg-green-600 active:text-white hover:text-white transition duration-150 ease-in-out inline-flex items-center">
                                Next <i class="bx bxs-chevron-right ml-2 text-base"></i>
                            </button>
                        </div>

                        <div class="inline-flex m-1">
                            <button
                                class="px-4 py-2 text-sm border border-transparent bg-green-500 rounded-none rounded-l-lg text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                                <i class="bx bxs-chevron-left mr-2 text-base"></i>
                                Prev
                            </button>

                            <button
                                class="px-4 py-2 text-sm border border-transparent rounded-none text-white active:bg-green-600 focus:outline-none focus:border-green-500 focus:shadow-outline-green bg-green-400 transition duration-150 ease-in-out inline-flex items-center">
                                1
                            </button>

                            <button
                                class="px-4 py-2 text-sm border border-transparent bg-green-500 rounded-none text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                                2
                            </button>
                            <button
                                class="px-4 py-2 text-sm border border-transparent bg-green-500 rounded-none rounded-r-lg text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                                Next
                                <i class="bx bxs-chevron-right ml-2 text-base"></i>
                            </button>
                        </div>

                        <div class="inline-flex m-1">
                            <button
                                class="px-4 py-2 text-sm border border-transparent bg-green-500 rounded-none rounded-l-full text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                                <i class="bx bxs-chevron-left mr-2 text-base"></i>
                                Prev
                            </button>

                            <button
                                class="px-4 py-2 text-sm border border-transparent rounded-none text-white active:bg-green-600 focus:outline-none focus:border-green-500 focus:shadow-outline-green bg-green-400 transition duration-150 ease-in-out inline-flex items-center">
                                1
                            </button>

                            <button
                                class="px-4 py-2 text-sm border border-transparent bg-green-500 rounded-none text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                                2
                            </button>
                            <button
                                class="px-4 py-2 text-sm border border-transparent bg-green-500 rounded-none rounded-r-full text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                                Next
                                <i class="bx bxs-chevron-right ml-2 text-base"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md:w-1/2 w-full">
                <!-- Card -->
                <div class="bg-white m-2 border rounded-md">
                    <!-- Card header -->
                    <div class="border-b px-4 py-2">
                        <h1 class="tetext-base font-medium text-gray-700">
                            Button Block
                        </h1>
                    </div>
                    <!-- End Card header -->

                    <!-- Card body -->
                    <div class="px-3 py-2">
                        <button
                            class="p-2 text-sm border border-transparent rounded bg-green-500 text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out w-full justify-center flex items-center my-2">
                            Button
                        </button>
                        <button
                            class="p-2 text-sm border border-transparent rounded bg-blue-500 text-white hover:bg-blue-400 focus:outline-none focus:border-blue-500 focus:shadow-outline-blue active:bg-blue-500 transition duration-150 ease-in-out w-full justify-center flex items-center my-2">
                            Button
                        </button>
                        <button
                            class="p-2 text-sm border border-transparent rounded bg-red-500 text-white hover:bg-red-400 focus:outline-none focus:border-red-500 focus:shadow-outline-blue active:bg-red-500 transition duration-150 ease-in-out w-full justify-center flex items-center my-2">
                            Button
                        </button>
                        <button
                            class="p-2 text-sm border border-gray-400 rounded bg-white hover:bg-gray-100 focus:outline-none focus:shadow-outline-white active:bg-white transition duration-150 ease-in-out w-full justify-center flex items-center my-2">
                            Button
                        </button>
                    </div>
                    <!-- End card body -->
                </div>
                <!-- End Card -->
            </div>

            <div class="md:w-1/2 w-full">
                <!-- Card -->
                <div class="bg-white m-2 border rounded-md">
                    <!-- Card header -->
                    <div class="border-b px-4 py-2">
                        <h1 class="tetext-base font-medium text-gray-700">
                            Button Size & Rounded
                        </h1>
                    </div>
                    <!-- End Card header -->

                    <!-- Card body -->
                    <div class="px-3 py-2">
                        <div>
                            <button
                                class="px-8 py-3 text-base border border-transparent rounded-full bg-green-500 text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                                Button
                            </button>
                            <button
                                class="px-8 py-3 text-base border border-transparent rounded-lg bg-blue-500 text-white hover:bg-blue-400 focus:outline-none focus:border-blue-500 focus:shadow-outline-blue active:bg-blue-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                                Button
                            </button>
                            <button
                                class="px-8 py-3 text-sm border border-gray-400 rounded-none bg-white hover:bg-gray-100 focus:outline-none focus:shadow-outline-white active:bg-white transition duration-150 ease-in-out inline-flex items-center m-1">
                                Button
                            </button>
                        </div>

                        <div>
                            <button
                                class="px-4 py-2 text-sm border border-transparent rounded-full bg-green-500 text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                                Button
                            </button>
                            <button
                                class="px-4 py-2 text-sm border border-transparent rounded-lg bg-blue-500 text-white hover:bg-blue-400 focus:outline-none focus:border-blue-500 focus:shadow-outline-blue active:bg-blue-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                                Button
                            </button>
                            <button
                                class="px-4 py-2 text-sm border border-transparent rounded bg-red-500 text-white hover:bg-red-400 focus:outline-none focus:border-red-500 focus:shadow-outline-blue active:bg-red-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                                Button
                            </button>
                            <button
                                class="px-4 py-2 text-sm border border-gray-400 rounded-none bg-white hover:bg-gray-100 focus:outline-none focus:shadow-outline-white active:bg-white transition duration-150 ease-in-out inline-flex items-center m-1">
                                Button
                            </button>
                        </div>

                        <div>
                            <button
                                class="px-3 py-1 text-xs border border-transparent rounded-full bg-green-500 text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                                Button
                            </button>
                            <button
                                class="px-3 py-1 text-xs border border-transparent rounded-lg bg-blue-500 text-white hover:bg-blue-400 focus:outline-none focus:border-blue-500 focus:shadow-outline-blue active:bg-blue-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                                Button
                            </button>
                            <button
                                class="px-3 py-1 text-xs border border-transparent rounded bg-red-500 text-white hover:bg-red-400 focus:outline-none focus:border-red-500 focus:shadow-outline-blue active:bg-red-500 transition duration-150 ease-in-out inline-flex items-center m-1">
                                Button
                            </button>
                            <button
                                class="px-3 py-1 text-sm border border-gray-400 rounded-none bg-white hover:bg-gray-100 focus:outline-none focus:shadow-outline-white active:bg-white transition duration-150 ease-in-out inline-flex items-center m-1">
                                Button
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
</div>
<!-- Footer -->
@include('includes.footer')
</div>
@endsection
