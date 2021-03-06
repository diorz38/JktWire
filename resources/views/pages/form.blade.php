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

                <a href="" class="text-green-600"> Component </a> / Form
            </h3>

            <div>
                <h1 class="text-2xl mt-1 font-medium">Form</h1>
            </div>
        </div>
    </div>
    <!-- End title -->

    <!-- Content -->
    <div class="flex flex-wrap">
        <div class="w-full">
            <div class="bg-white border rounded mx-2 my-4">
                <div class="py-3 px-4 border-b flex justify-between items-center">
                    <h2 class="text-lg font-medium text-gray-700">Inline Form</h2>
                </div>
                <div class="p-3 text-gray-600">
                    <form>
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-1/3 p-2">
                                <label class="block mb-1.5">Fullname</label>
                                <input
                                    class="focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:outline-none w-full text-base placeholder-gray-400 border border-gray-300 rounded py-1.5 px-3"
                                    type="text" placeholder="Enter someting ..." />
                                <span class="text-sm text-gray-500">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </span>
                            </div>
                            <div class="w-full md:w-1/3 p-2">
                                <label class="block mb-1.5">Username</label>
                                <input
                                    class="focus:ring-2 focus:ring-red-200 focus:outline-none w-full text-base placeholder-gray-400 border border-red-500 rounded py-1.5 px-3"
                                    type="text" placeholder="Enter username here ..." required />
                                <span class="text-sm text-red-600">Username is required</span>
                            </div>
                            <div class="w-full md:w-1/3 p-2">
                                <label class="block mb-1.5">Email</label>
                                <input
                                    class="border-green-400 focus:ring-1 focus:ring-green-200 focus:outline-none w-full text-base placeholder-gray-400 border rounded py-1.5 px-3"
                                    type="email" placeholder="example@email.com" />
                                <span class="text-sm text-green-600">Email is valid, ready to use</span>
                            </div>
                            <div class="w-full md:w-1/3 p-2">
                                <button
                                    class="px-4 py-2 text-sm border border-transparent rounded bg-green-500 text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="md:w-1/2">
            <div class="bg-white border rounded mx-2 my-4">
                <div class="py-3 px-4 border-b flex justify-between items-center">
                    <h2 class="text-lg font-medium text-gray-700">Vertical Form</h2>
                </div>
                <div class="p-3 text-gray-600">
                    <form>
                        <div class="block p-2">
                            <label class="block mb-1.5">Fullname</label>
                            <input
                                class="focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:outline-none w-full text-base placeholder-gray-400 border border-gray-300 rounded py-1.5 px-3"
                                type="text" placeholder="Enter fullname ..." />
                            <span class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit</span>
                        </div>
                        <div class="block p-2">
                            <label class="block mb-1.5">Email</label>
                            <input
                                class="focus:ring-2 focus:ring-red-200 focus:outline-none w-full text-base placeholder-gray-400 border border-red-500 rounded py-1.5 px-3"
                                type="text" placeholder="Enter Email Address..." required />
                            <span class="text-sm text-red-600">Email is required</span>
                        </div>
                        <div class="block px-2">
                            <div>
                                <label class="block mb-1.5">About</label>
                                <textarea
                                    class="border-green-400 focus:ring-1 focus:ring-green-200 focus:outline-none w-full text-base placeholder-gray-400 border rounded py-1.5 px-3"
                                    rows="3" placeholder="Enter some long form content.">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </textarea>
                                <span class="text-sm text-green-600">Wow awesome bro</span>
                            </div>
                        </div>
                        <div class="block p-2 mt-4">
                            <button
                                class="px-4 py-2 text-sm border border-transparent rounded bg-green-500 text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                                <i class="bx bx-world text-white mr-2 text-base"></i>
                                Publish
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="md:w-1/2">
            <div class="bg-white border rounded mx-2 my-4">
                <div class="py-3 px-4 border-b flex justify-between items-center">
                    <h2 class="text-lg font-medium text-gray-700">Horizontal Form</h2>
                </div>
                <div class="p-3 text-gray-600">
                    <form>
                        <div class="p-2 flex">
                            <label class="w-1/4 inline py-2 pr-4 text-right">Fullname</label>
                            <div class="w-full">
                                <input
                                    class="focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:outline-none w-full text-base placeholder-gray-400 border border-gray-300 rounded py-1.5 px-3"
                                    type="text" placeholder="Enter fullname ..." />
                                <span class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit</span>
                            </div>
                        </div>

                        <div class="p-2 flex">
                            <label class="w-1/4 inline py-2 pr-4 text-right">Username</label>
                            <div class="w-full">
                                <input
                                    class="focus:ring-2 focus:ring-red-200 focus:outline-none w-full text-base placeholder-gray-400 border border-red-500 rounded py-1.5 px-3"
                                    type="text" placeholder="Enter username ..." />
                                <span class="text-sm text-red-600">Username is required</span>
                            </div>
                        </div>

                        <div class="p-2 flex">
                            <label class="w-1/4 inline py-2 pr-4 text-right">About</label>
                            <div class="w-full">
                                <textarea
                                    class="border-green-400 focus:ring-1 focus:ring-green-200 focus:outline-none w-full text-base placeholder-gray-400 border rounded py-1.5 px-3"
                                    rows="3" placeholder="Enter some long form content." spellcheck="false">
Yes, iam full stuck ...</textarea>
                                <span class="text-sm text-green-600">Wow awesome bro</span>
                            </div>
                        </div>

                        <div class="p-2 flex mt-4">
                            <label class="w-1/4 inline py-2 pr-4 text-right"></label>
                            <div class="w-full">
                                <button
                                    class="px-4 py-2 text-sm border border-transparent rounded bg-green-500 text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                                    <i class="bx bx-world text-white mr-2 text-base"></i>
                                    Publish
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="w-full">
            <div class="bg-white border rounded mx-2 my-4">
                <div class="py-3 px-4 border-b flex justify-between items-center">
                    <h2 class="text-lg font-medium text-gray-700">Size input</h2>
                </div>
                <div class="p-3 text-gray-600">
                    <form>
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-1/3 px-2 py-2">
                                <label class="block mb-1.5 text-sm">Full name</label>
                                <input
                                    class="focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:outline-none w-full text-sm placeholder-gray-400 border border-gray-300 rounded py-1 px-2"
                                    type="text" placeholder="Enter someting ..." />
                                <span class="text-xs text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit</span>
                            </div>
                            <div class="w-full md:w-1/3 px-2 py-2">
                                <label class="block mb-1.5 text-sm">Username</label>
                                <input
                                    class="focus:ring-2 focus:ring-red-200 focus:outline-none w-full text-sm placeholder-gray-400 border border-red-500 rounded py-1 px-2"
                                    type="text" placeholder="Enter username here ..." required />
                                <span class="text-xs text-red-600">Username is required</span>
                            </div>
                            <div class="w-full md:w-1/3 px-2 py-2">
                                <label class="block mb-1.5 text-sm">Email</label>
                                <input
                                    class="border-green-400 focus:ring-1 focus:ring-green-200 focus:outline-none w-full text-sm placeholder-gray-400 border rounded py-1 px-2"
                                    type="email" placeholder="example@email.com" />
                                <span class="text-xs text-green-600">Email is valid, ready to use</span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-1/3 px-2 py-2">
                                <label class="block mb-1.5 text-base">Full name</label>
                                <input
                                    class="focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:outline-none w-full text-base placeholder-gray-400 border border-gray-300 rounded py-1.5 px-3"
                                    type="text" placeholder="Enter someting ..." />
                                <span class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit</span>
                            </div>
                            <div class="w-full md:w-1/3 px-2 py-2">
                                <label class="block mb-1.5 text-base">Username</label>
                                <input
                                    class="focus:ring-2 focus:ring-red-200 focus:outline-none w-full text-base placeholder-gray-400 border border-red-500 rounded py-1.5 px-3"
                                    type="text" placeholder="Enter username here ..." required />
                                <span class="text-sm text-red-600">Username is required</span>
                            </div>
                            <div class="w-full md:w-1/3 px-2 py-2">
                                <label class="block mb-1.5 text-base">Email</label>
                                <input
                                    class="border-green-400 focus:ring-1 focus:ring-green-200 focus:outline-none w-full text-base placeholder-gray-400 border rounded py-1.5 px-3"
                                    type="email" placeholder="example@email.com" />
                                <span class="text-sm text-green-600">Email is valid, ready to use</span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-1/3 px-2 py-2">
                                <label class="block mb-1.5 text-lg">Full name</label>
                                <input
                                    class="focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:outline-none w-full text-lg placeholder-gray-400 border border-gray-300 rounded py-3 px-4"
                                    type="text" placeholder="Enter someting ..." />
                                <span class="text-base text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit</span>
                            </div>
                            <div class="w-full md:w-1/3 px-2 py-2">
                                <label class="block mb-1.5 text-lg">Username</label>
                                <input
                                    class="focus:ring-2 focus:ring-red-200 focus:outline-none w-full text-lg placeholder-gray-400 border border-red-500 rounded py-3 px-4"
                                    type="text" placeholder="Enter username here ..." required />
                                <span class="text-base text-red-600">Username is required</span>
                            </div>
                            <div class="w-full md:w-1/3 px-2 py-2">
                                <label class="block mb-1.5 text-lg">Email</label>
                                <input
                                    class="border-green-400 focus:ring-1 focus:ring-green-200 focus:outline-none w-full text-lg placeholder-gray-400 border rounded py-3 px-4"
                                    type="email" placeholder="example@email.com" />
                                <span class="text-base text-green-600">Email is valid, ready to use</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
@include('includes.footer')
</div>
@endsection
