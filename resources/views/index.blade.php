@extends('layouts.app')

{{-- Header hero section --}}

@section('hero')
    <div class="header_hero bg-light text-primary">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-sm-6 d-flex align-items-center h-100">
                    <div class="text-center">
                        <h1 class="text-5xl text-light" style="font-family: 'Abril Fatface', cursive;">Enjoy Food All <br />
                            Over
                            The
                            World
                        </h1>
                        <a href="{{ route('menu.index') }}" class="btn btn-lg mt-3 btn-primary">Order Online Now</a>
                    </div>

                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="py-16 white">
        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <h2 class="mb-12 text-center text-2xl text-gray-900 font-bold md:text-4xl">What's our customers say</h2>
            <div class="grid gap-8 md:grid-rows-2 lg:grid-cols-2">
                <div class="row-span-2 p-6 border border-gray-100 rounded-xl bg-gray-50 text-center sm:p-8">
                    <div class="h-full flex flex-col justify-center space-y-4">
                        <img class="w-20 h-20 mx-auto rounded-full"
                            src="https://tailus.io/sources/blocks/grid-cards/preview/images/avatars/second_user.webp"
                            alt="user avatar" height="220" width="220" loading="lazy">
                        <p class="text-gray-600 md:text-xl"> <span class="font-serif">"</span> Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto
                            aliquam consequatur repellat provident, omnis ut, sapiente voluptates veritatis cum deleniti
                            repudiandae ad doloribus. <span class="font-serif">"</span></p>
                        <div>
                            <h6 class="text-lg font-semibold leading-none">Jane Doe</h6>
                            <span class="text-xs text-gray-500">Product Designer</span>
                        </div>
                    </div>
                </div>

                <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:flex sm:space-x-8 sm:p-8">
                    <img class="w-20 h-20 mx-auto rounded-full"
                        src="https://tailus.io/sources/blocks/grid-cards/preview/images/avatars/first_user.webp"
                        alt="user avatar" height="220" width="220" loading="lazy">
                    <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                        <p class="text-gray-600"> <span class="font-serif">"</span> Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto
                            aliquam consequatur repellat provident, omnis ut, sapiente voluptates veritatis cum deleniti
                            repudiandae ad doloribus. <span class="font-serif">"</span></p>
                        <div>
                            <h6 class="text-lg font-semibold leading-none">Jane Doe</h6>
                            <span class="text-xs text-gray-500">Product Designer</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:flex sm:space-x-8 sm:p-8">
                    <img class="w-20 h-20 mx-auto rounded-full"
                        src="https://tailus.io/sources/blocks/grid-cards/preview/images/avatars/third_user.webp"
                        alt="user avatar" height="220" width="220" loading="lazy">
                    <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                        <p class="text-gray-600"> <span class="font-serif">"</span> Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto
                            aliquam consequatur repellat provident, omnis ut, sapiente voluptates veritatis cum deleniti
                            repudiandae ad doloribus. <span class="font-serif">"</span></p>
                        <div>
                            <h6 class="text-lg font-semibold leading-none">Jane Doe</h6>
                            <span class="text-xs text-gray-500">Product Designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="bg-black text-white py-5">
            <div class="container mx-auto flex flex-col md:flex-row my-2 md:my-24">
                <div class="flex flex-col w-full lg:w-1/3 p-2">
                    <p class="ml-2 text-yellow-300 text-lg uppercase tracking-loose">REVIEW</p>
                    <p class="text-3xl md:text-5xl my-1 leading-relaxed md:leading-snug">Leave us a feedback!</p>
                    <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100">
                        Please provide your valuable feedback and something something ...
                    </p>
                </div>
                <div class="flex flex-col w-full lg:w-2/3 justify-center">
                    <div class="container w-full px-1">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-6/12 px-2">
                                <div
                                    class="relative flex flex-col min-w-0 break-words w-full mb-2 shadow-lg rounded-lg bg-white">
                                    <div class="flex-auto p-2 lg:p-10">
                                        <h4 class="text-2xl mb-1 text-black font-semibold">Have a suggestion?</h4>
                                        <form id="feedbackForm" action="" method="">
                                            <div class="relative w-full mb-1">
                                                <label class="block uppercase text-gray-700 text-xs font-bold mb-1"
                                                    for="email">Email</label><input type="email" name="email" id="email"
                                                    class="border-0 px-1 py-1 rounded text-sm shadow w-full
                        bg-gray-300 placeholder-black text-gray-800 outline-none focus:bg-gray-400"
                                                    placeholder=" " style="transition: all 0.15s ease 0s;" required />
                                            </div>
                                            <div class="relative w-full mb-1">
                                                <label class="block uppercase text-gray-700 text-xs font-bold mb-1"
                                                    for="message">Message</label>
                                                <textarea maxlength="300" name="feedback" id="feedback" rows="4" cols="80"
                                                    class="border-0 px-1 py-1 bg-gray-300 placeholder-black text-gray-800 rounded text-sm shadow focus:outline-none w-full"
                                                    placeholder="" required></textarea>
                                            </div>
                                            <div class="text-center mt-6">
                                                <button id="feedbackBtn"
                                                    class="bg-yellow-300 text-black text-center mx-auto active:bg-yellow-400 text-sm font-bold uppercase px-2 py-1 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                                    type="submit" style="transition: all 0.15s ease 0s;">Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
