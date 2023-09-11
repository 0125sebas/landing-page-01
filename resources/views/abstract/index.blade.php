@extends('layouts.app')

@section('contenido')
    @include('layouts._partials.navbar')
    <div class="w-screen h-auto bg-quarternary-600 p-16">
        <div class="container flex flex-col gap-5 mx-auto w-1/2">
            <div>
                <h1 class="text-6xl text-center">How can we help?</h1>
            </div>
            <div class="w-full">
                <input class="w-full p-4 border border-primary-900 outline-tertiary-200 text-lg shadow-xl rounded" type="search" name="" id="" placeholder="Search">
            </div>
        </div>
    </div>
    {{-- principal --}}
    <div class="w-screen">
        <div class="container w-3/4 mx-auto grid grid-cols-2 gap-20 grid-rows-3 p-16">
            <div class="flex justify-content-center items-center gap-4 text-lg container w-full text-justify">
                <div class="w-1/2">
                    <img class="w-full h-auto" src="{{ Vite::asset('public/imgs/branch-img.png') }}" alt="">
                </div>
                <div class="w-1/2 flex flex-col gap-2">
                    <h2 class="font-medium">Using Abstract</h2>
                    <p>Abstract lets you manage, version, and document your designs in one place.</p>
                    <a class="text-tertiary-400" href="">Learn More</a>
                </div>
            </div>
            <div class="flex justify-content-center items-center gap-4 text-lg container w-full text-justify">
                <div class="w-1/2">
                    <img class="w-full h-auto" src="{{ Vite::asset('public/imgs/people-img.png') }}" alt="">
                </div>
                <div class="w-1/2 flex flex-col gap-2">
                    <h2 class="font-medium">Manage your account</h2>
                    <p>Configure your account settings, such as your email, profile details, and password.</p>
                    <a class="text-tertiary-400" href="">Learn More</a>
                </div>
            </div>
            <div class="flex justify-content-center items-center gap-4 text-lg container w-full text-justify">
                <div class="w-1/2">
                    <img class="w-full h-auto" src="{{ Vite::asset('public/imgs/puzzle-img.png') }}" alt="">
                </div>
                <div class="w-1/2 flex flex-col gap-2">
                    <h2 class="font-medium">Manage organizations, teams, and projects</h2>
                    <p>Use Abstract organizations, teams, and projects to organize your people and your work.</p>
                    <a class="text-tertiary-400" href="">Learn more</a>
                </div>
            </div>
            <div class="flex justify-content-center items-center gap-4 text-lg container w-full text-justify">
                <div class="w-1/2">
                    <img class="w-full h-auto" src="{{ Vite::asset('public/imgs/dollar-img.png') }}" alt="">
                </div>
                <div class="w-1/2 flex flex-col gap-2">
                    <h2 class="font-medium">Manage billing</h2>
                    <p>Manage billing Change subscriptions and payment details.</p>
                    <a class="text-tertiary-400" href="">Learn More</a>
                </div>
            </div>
            <div class="flex justify-content-center items-center gap-4 text-lg container w-full text-justify">
                <div class="w-1/2">
                    <img class="w-full h-auto" src="{{ Vite::asset('public/imgs/key-img.png') }}" alt="">
                </div>
                <div class="w-1/2 flex flex-col gap-2">
                    <h2 class="font-medium">Authenticate to Abstract</h2>
                    <p>Set up and configure SSO, SCIM, and Just-in-Time provisioning.</p>
                    <a class="text-tertiary-400" href="">Learn More</a>
                </div>
            </div>
            <div class="flex justify-content-center items-center gap-4 text-lg container w-full text-justify">
                <div class="w-1/2">
                    <img class="w-full h-auto" src="{{ Vite::asset('public/imgs/message-img.png') }}" alt="">
                </div>
                <div class="w-1/2 flex flex-col gap-2">
                    <h2 class="font-medium">Abstract support</h2>
                    <p>Get in touch with a human.</p>
                    <a class="text-tertiary-400" href="">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    @include('layouts._partials.footer')
@endsection
