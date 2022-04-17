@extends('layouts.app')

{{-- Header hero section --}}

@section('hero')
    <div class="header_hero bg-light text-primary">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-sm-6 d-flex align-items-center h-100">
                    <div class="text-center">
                        <h1 class="text-light" style="font-family: 'Abril Fatface', cursive;">Enjoy Food All <br /> Over
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
@endsection
