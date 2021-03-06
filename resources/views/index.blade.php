@extends('layouts.app')

{{-- Header hero section --}}

@section('hero')
    <div class="header_hero bg-light text-primary">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-sm-6 d-flex align-items-center h-100 lg:mx-10">
                    <div class="text-left">
                        <h1 class="text-5xl text-light" style="font-family: 'Abril Fatface', cursive;">Enjoy Food All <br />
                            Over
                            The
                            World
                        </h1>
                        <small class="text-light">These Are Healthy Racipes shake up your comfort food <br /> fevorite by
                            adding more vagies
                            and
                            swapping out<br /> coking method</small><br />
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
    <main class="py-12 md:px-20 sm:px-14 px-6">
        <div class="sm:flex items-center shadow-md">
            <div class="md:px-10 sm:px-5">
                <h1 class="font-bold text-2xl my-2 text-primary">Best Qality for your health</h1>
                <p class="text-gray-700 mb-2 md:mb-6">It is a long established fact that a reader will be distracted by the
                    readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
                <div class="flex justify-between mb-2">
                    <span class="font-thin text-sm">May 20th 2022</span>
                    <span class="sm:block hidden mb-2 text-gray-800 font-bold">Read more</span>
                </div>
            </div>
            <div>
                <img class="bg-cover"
                    src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                    alt="" />
            </div>
        </div>
        <div class="mt-6 md:flex space-x-6">
            <div class="shadow-md">
                <img src="https://images.unsplash.com/photo-1484723091739-30a097e8f929?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=449&q=80&h=300"
                    alt="" />
                <div class="px-4">
                    <h1 class="mt-3 text-primary text-2xl font-bold my-2">New Dishes</h1>
                    <p class="text-gray-700 mb-2">It is a long established fact that a reader will be distracted by the
                        readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....
                    </p>
                    <div class="flex justify-between mt-4">
                        <span class="font-thin text-sm">May 20th 2022</span>
                        <span class="mb-2 text-gray-800 font-bold">Buy Now</span>
                    </div>
                </div>
            </div>
            <div class="shadow-md">
                <img src="https://images.unsplash.com/photo-1484723091739-30a097e8f929?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=449&q=80&h=300"
                    alt="" />
                <div class="px-6">
                    <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">long established</h1>
                    <p class="text-gray-700 mb-2">It is a long established fact that a reader will be distracted by the
                        readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....
                    </p>
                    <div class="flex justify-between mt-4">
                        <span class="font-thin text-sm">May 20th 2020</span>
                        <span class="mb-2 text-gray-800 font-bold">Read more</span>
                    </div>
                </div>
            </div>
            <div class="shadow-md">
                <img src="https://images.unsplash.com/photo-1484723091739-30a097e8f929?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=449&q=80&h=300"
                    alt="" />
                <div class="px-4">
                    <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">long established</h1>
                    <p class="text-gray-700 mb-2">It is a long established fact that a reader will be distracted by the
                        readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....
                    </p>
                    <div class="flex justify-between mt-4">
                        <span class="font-thin text-sm">May 20th 2020</span>
                        <span class="mb-2 text-gray-800 font-bold">Read more</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="sm:flex items-center shadow-md mt-10">
            <div>
                <img class="bg-cover"
                    src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                    alt="" />
            </div>
            <div class="md:px-10 sh sm:px-5">
                <h1 class="text-gray-800 font-bold text-2xl my-2">long established</h1>
                <p class="text-gray-700 mb-2 md:mb-6">It is a long established fact that a reader will be distracted by the
                    readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
                <div class="flex justify-between mb-2">
                    <span class="font-thin text-sm">May 20th 2020</span>
                    <span class="sm:block hidden mb-2 text-gray-800 font-bold">Read more</span>
                </div>
            </div>
        </div>
    </main>

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
