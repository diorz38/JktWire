@extends('layouts.app')

@section('content')
@include('includes.navbar')
<div class="max-w-screen-xl mx-auto">
    <!-- Title -->
    <div class="mt-4 mx-4 md:flex justify-between items-center">
      <div class="">
        <h3 class="text-gray-600 text-sm">
          <a href="" class="text-green-600">
            <i class="bx bx-home mr-1"></i>

            Home
          </a>
          /

          <a href="" class="text-green-600"> Component </a> / Card
        </h3>
      </div>
    </div>
    <!-- End title -->

    <!-- Content -->
    <div>
      <!-- Title -->
      <div class="mx-4 my-2">
        <h1 class="text-2xl mt-1 font-medium">Blog</h1>
        <span class="text-base text-gray-600">Card Blog Style</span>
      </div>
      <!-- End title -->

      <div class="flex flex-wrap">
        <div class="md:w-1/3">
          <div class="bg-white border rounded m-4">
            <a href="">
              <img
                class="rounded-t h-48 w-full object-cover"
                src="{{ asset('jakarta/images/2.jpg') }}"
                alt=""
              />
            </a>
            <div class="m-4">
              <div>
                <a href="" class="font-bold text-gray-700 text-xl">
                  I suck at programming, but I love it. What should I do?
                </a>
              </div>
              <div class="my-4">
                <p class="text-gray-600 my-2">
                  At level zero you know nothing, however when you learn a
                  thing or two basic things about programming, you now get to
                  level 1 ...
                </p>
              </div>
              <div class="mt-6">
                <div class="flex justify-between items-center">
                  <a class="flex justify-between items-center" href="">
                    <img
                      class="w-10 h-10 rounded-full object-cover"
                      src="{{ asset('jakarta/avatar/nis.png') }}"
                      alt="Avatar"
                    />
                    <div class="ml-3">
                      <p class="text-gray-700 text-sm block leading-none">
                        Zero Black Coder
                      </p>
                      <small class="text-xs text-gray-600"
                        >16 Jul 2020 - 3 Minutes read</small
                      >
                    </div>
                  </a>
                  <div>
                    <button
                      class="text-gray-700 hover:text-gray-600 focus:outline-none focus:shadow-outline-blue active:text-gray-700 transition duration-150 ease-in-out m-1 inline-flex items-center"
                    >
                      <i class="bx bx-bookmark text-xl"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="md:w-1/3">
          <div class="bg-white border rounded m-4">
            <a href="">
              <img
                class="h-48 w-full rounded-t object-cover"
                src="{{ asset('jakarta/images/3.jpg') }}"
                alt=""
              />
            </a>
            <div class="m-4">
              <div class="my-4">
                <div class="flex justify-between items-center">
                  <a class="flex justify-between items-center" href="">
                    <img
                      class="w-10 h-10 rounded-full object-cover"
                      src="{{ asset('jakarta/avatar/nis.png') }}"
                      alt="Avatar"
                    />
                    <div class="ml-3">
                      <p class="text-gray-700 text-sm block leading-none">
                        Mariana Azevedo
                      </p>
                      <small class="text-xs text-gray-600"
                        >Today - 3 Minutes read</small
                      >
                    </div>
                  </a>
                  <div>
                    <button
                      class="text-gray-700 hover:text-gray-600 focus:outline-none focus:shadow-outline-blue active:text-gray-700 transition duration-150 ease-in-out m-1 inline-flex items-center"
                    >
                      <i class="bx bx-bookmark text-xl"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="my-4">
                <a href="" class="font-bold text-gray-700 text-xl">
                  S.O.L.I.D principles: what are they and why projects should
                  use them
                </a>
              </div>

              <div class="my-4">
                <p class="text-gray-600 my-2">
                  At level zero you know nothing, however when you learn a
                  thing or two basic things about programming, you now get to
                  level 1 ...
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="md:w-1/3">
          <div class="bg-white border rounded m-4">
            <div class="m-4">
              <div class="flex justify-between items-center">
                <a class="flex justify-between items-center" href="">
                  <img
                    class="w-10 h-10 rounded-full object-cover"
                    src="{{ asset('jakarta/avatar/nis.png') }}"
                    alt="Avatar"
                  />
                  <div class="ml-3">
                    <p class="text-gray-700 text-sm block leading-none">
                      Mariana Azevedo
                    </p>
                    <small class="text-xs text-gray-600"
                      >Today - 3 Minutes read</small
                    >
                  </div>
                </a>
                <div>
                  <button
                    class="text-gray-700 hover:text-gray-600 focus:outline-none focus:shadow-outline-blue active:text-gray-700 transition duration-150 ease-in-out m-1 inline-flex items-center"
                  >
                    <i class="bx bx-bookmark text-xl"></i>
                  </button>
                </div>
              </div>
            </div>
            <a href="">
              <img
                class="h-48 w-full object-cover"
                src="{{ asset('jakarta/images/4.jpg') }}"
                alt=""
              />
            </a>
            <div class="m-4">
              <div>
                <a href="" class="font-bold text-gray-700 text-xl">
                  S.O.L.I.D principles: what are they and why projects should
                  use them
                </a>
              </div>
              <div class="my-4">
                <p class="text-gray-600 my-2">
                  At level zero you know nothing, however when you learn a
                  thing or two basic things about programming, you now get to
                  level 1 ...
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="md:w-1/3">
          <div class="bg-white border rounded m-4">
            <div class="m-4">
              <div>
                <a href="" class="font-bold text-gray-700 text-xl">
                  S.O.L.I.D principles: what are they and why projects should
                  use them
                </a>
              </div>
              <div class="my-4">
                <p class="text-gray-600 my-2">
                  At level zero you know nothing, however when you learn a
                  thing or two basic things about programming, you now get to
                  level 1 ...
                </p>
              </div>
              <div>
                <div class="flex justify-between items-center">
                  <a class="flex justify-between items-center" href="">
                    <img
                      class="w-10 h-10 rounded-full object-cover"
                      src="{{ asset('jakarta/avatar/nis.png') }}"
                      alt="Avatar"
                    />
                    <div class="ml-3">
                      <p class="text-gray-700 text-sm block leading-none">
                        Mariana Azevedo
                      </p>
                      <small class="text-xs text-gray-600"
                        >Today - 3 Minutes read</small
                      >
                    </div>
                  </a>
                  <div>
                    <button
                      class="text-gray-700 hover:text-gray-600 focus:outline-none focus:shadow-outline-blue active:text-gray-700 transition duration-150 ease-in-out m-1 inline-flex items-center"
                    >
                      <i class="bx bx-bookmark text-xl"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="md:w-1/3">
          <div class="bg-white border rounded m-4">
            <div class="m-4">
              <div>
                <a href="" class="font-bold text-gray-700 text-xl"
                  >Talk is cheap. Show me the code - Linus Torvalds
                </a>
              </div>
              <div class="my-4">
                <p class="text-gray-600 my-2">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Illo, ex autem? Nisi minus porro pariatur quaerat officia
                  asperiores officiis...
                </p>
              </div>
              <div>
                <div class="flex justify-between items-center">
                  <a class="flex justify-between items-center" href="">
                    <img
                      class="w-10 h-10 rounded-full object-cover"
                      src="{{ asset('jakarta/avatar/nis.png') }}"
                      alt="Avatar"
                    />
                    <div class="ml-3">
                      <p class="text-gray-700 text-sm block leading-none">
                        Mariana Azevedo
                      </p>
                      <small class="text-xs text-gray-600"
                        >Today - 3 Minutes read</small
                      >
                    </div>
                  </a>
                  <div>
                    <button
                      class="text-gray-700 hover:text-gray-600 focus:outline-none focus:shadow-outline-blue active:text-gray-700 transition duration-150 ease-in-out m-1 inline-flex items-center"
                    >
                      <i class="bx bx-bookmark text-xl"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="md:w-1/3">
          <div class="bg-white border rounded m-4">
            <div class="m-4">
              <div>
                <a href="" class="font-bold text-gray-700 text-xl">
                  I suck at programming, but I love it. What should I do?
                </a>
              </div>
              <div class="my-4">
                <p class="text-gray-600 my-2">
                  At level zero you know nothing, however when you learn a
                  thing or two basic things about programming, you now get to
                  level 1 ...
                </p>
              </div>
              <div>
                <div class="flex justify-between items-center">
                  <a class="flex justify-between items-center" href="">
                    <img
                      class="w-10 h-10 rounded-full object-cover"
                      src="{{ asset('jakarta/avatar/nis.png') }}"
                      alt="Avatar"
                    />
                    <div class="ml-3">
                      <p class="text-gray-700 text-sm block leading-none">
                        Mariana Azevedo
                      </p>
                      <small class="text-xs text-gray-600"
                        >Today - 3 Minutes read</small
                      >
                    </div>
                  </a>
                  <div>
                    <button
                      class="text-gray-700 hover:text-gray-600 focus:outline-none focus:shadow-outline-blue active:text-gray-700 transition duration-150 ease-in-out m-1 inline-flex items-center"
                    >
                      <i class="bx bx-bookmark text-xl"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Content -->

    <!-- Content -->
    <div>
      <!-- Title -->
      <div class="mx-4 my-2">
        <h1 class="text-2xl mt-1 font-medium">Profile</h1>
        <span class="text-base text-gray-600">Card Blog Style</span>
      </div>
      <!-- End Title -->

      <div class="flex flex-wrap">
        <div class="md:w-1/4">
          <div class="bg-white border rounded m-4">
            <div class="py-8 px-4">
              <a href="">
                <img
                  class="rounded-full mx-auto h-24 w-24 object-cover"
                  src="{{ asset('jakarta/avatar/nis.png') }}"
                  alt=""
                />
              </a>
              <div class="py-4 text-center text-xl">
                <h1 class="leading-3 font-medium text-xl">
                  Zero Black Coder
                </h1>
                <span class="text-sm text-gray-700 font-normal leading-3"
                  >zrcoder101@gmail.com</span
                >
                <p class="text-sm text-gray-600 leading-5 mt-3">
                  Zero Black Coder is an Member of DPR living in planet namek,
                  i love to play with hooman
                </p>
              </div>
              <div class="px-8 pb-4 pt-2 flex justify-between items-center">
                <div>
                  <div class="text-center text-xl font-base text-gray-500">
                    <i class="bx bx-camera"></i>
                  </div>
                  <div
                    class="text-center text-xl font-medium text-gray-700 leading-none"
                  >
                    126
                  </div>
                </div>

                <div>
                  <div class="text-center text-xl font-base text-gray-500">
                    <i class="bx bx-bookmark"></i>
                  </div>
                  <div
                    class="text-center text-xl font-medium text-gray-700 leading-none"
                  >
                    897
                  </div>
                </div>
                <div>
                  <div class="text-center text-xl font-base text-gray-500">
                    <i class="bx bx-user"></i>
                  </div>
                  <div
                    class="text-center text-xl font-medium text-gray-700 leading-none"
                  >
                    551K
                  </div>
                </div>
              </div>
              <div class="px-4">
                <button
                  class="py-2 w-full text-sm border border-transparent rounded bg-green-500 text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-blue active:bg-green-500 transition duration-150 ease-in-out inline-flex justify-center items-center"
                >
                  <i class="bx bx-user-plus text-lg text-white mr-4"></i>
                  Add Friends
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="md:w-1/4">
          <div class="bg-white border rounded m-4">
            <div class="py-10 px-6">
              <a href="">
                <img
                  class="rounded-full mx-auto h-24 w-24 object-cover"
                  src="{{ asset('jakarta/avatar/nis.png') }}"
                  alt=""
                />
              </a>
              <div class="py-4 text-center text-xl">
                <h1 class="leading-5 font-medium text-xl">
                  Zero Black Coder
                </h1>
                <span class="text-base text-gray-600 font-normal"
                  >@zrcoder101</span
                >
              </div>
              <div class="px-4 pb-4 text-center">
                <button
                  class="px-6 py-2 text-sm border border-transparent rounded bg-green-500 text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-blue active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center m-1"
                >
                  <i class="bx bx-user text-white mr-4 text-base"></i>
                  Follow Me
                </button>
              </div>
              <div class="px-4 pt-4 flex justify-between items-center">
                <div>
                  <span
                    class="block text-center text-2xl font-medium text-gray-700"
                    >112K</span
                  >
                  <span class="text-gray-600 text-sm text-center"
                    >Followers</span
                  >
                </div>
                <div>
                  <span
                    class="block text-center text-2xl font-medium text-gray-700"
                    >52</span
                  >
                  <span class="text-gray-600 text-sm text-center"
                    >Followings</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="md:w-1/4">
          <div class="bg-white border rounded m-4">
            <div class="py-8 px-4">
              <a href="">
                <img
                  class="rounded-full mx-auto h-24 w-24 object-cover"
                  src="{{ asset('jakarta/avatar/nis.png') }}"
                  alt=""
                />
              </a>
              <div class="py-4 text-center text-xl">
                <h1 class="leading-3 font-medium text-xl">
                  Zero Black Coder
                </h1>
                <span class="text-sm text-gray-600 font-base leading-3"
                  >Sowftware Engineer</span
                >
                <div class="text-gray-600">
                  <a href="#" class="hover:text-gray-700">
                    <i class="bx bxl-linkedin"></i>
                  </a>
                  <a href="" class="hover:text-gray-700">
                    <i class="bx bxl-github"></i>
                  </a>
                  <a href="#" class="hover:text-gray-700">
                    <i class="bx bxl-instagram"></i>
                  </a>
                </div>
                <p class="text-sm text-gray-600 leading-5 mt-3">
                  Zero Black Coder is an Member of DPR living in panet namek,
                  I love to play with hooman
                </p>
              </div>
              <div class="px-4">
                <button
                  class="py-2 w-full text-sm border border-transparent rounded bg-green-500 text-white hover:bg-green-400 focus:outline-none focus:border-green-400 focus:shadow-outline-blue active:bg-green-500 transition duration-150 ease-in-out inline-flex justify-center items-center"
                >
                  Hire Me
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="md:w-1/4">
          <div class="bg-white border rounded m-4">
            <a href="">
              <img
                class="rounded-t h-64 w-full object-cover"
                src="{{ asset('jakarta/images/5.jpg') }}"
                alt=""
              />
            </a>
            <div class="px-4 py-3 border-b">
              <div>
                <a
                  href=""
                  class="font-medium text-gray-700 text-lg block leading-5"
                >
                  Zero Black Coder
                </a>
                <span class="text-gray-500 text-sm">Member DPR</span>
              </div>
              <div class="my-2">
                <p class="text-gray-600 text-sm">
                  Zero Black Coder is an Member of DPR living in panet namek.
                </p>
              </div>
            </div>
            <div class="px-4 py-2 flex justify-between items-center">
              <div
                class="inline-flex items-center justify-between text-gray-600"
              >
                <i class="bx bxs-user mr-2"></i>
                <span class="text-sm">25 Freinds</span>
              </div>
              <div>
                <span class="text-gray-600 text-sm">Joined in 2077</span>
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
