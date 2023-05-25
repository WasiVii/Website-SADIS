@extends('layouts/app')
 
@section('title', 'Teams')


@php
$profile1 = array(
    'name' => 'Abdul Wasi\' Al-Afif',
    'github' => 'abdwasidev',
    'photo' => 'https://s3.getstickerpack.com/storage/uploads/sticker-pack/genshin-kaedehara-kazuha/sticker_3.png',
    'roles' => 'Frontend',
    'college' => 'UPN "Veteran" Jawa Timur',
    'email' => 'abdulwasialafif@gmail.com'
);

$profile2 = array(
    'name' => 'Ardu Darugutni',
    'github' => 'ArduDarugutni',
    'photo' => 'https://s3.getstickerpack.com/storage/uploads/sticker-pack/genshin-zhongli/sticker_1.png',
    'roles' => 'Dokumentasi',
    'college' => '-',
    'email' => '-'
);

$profile3 = array(
    'name' => 'Fawwaz Mubarak',
    'github' => 'fawwazzzz',
    'photo' => 'https://s3.getstickerpack.com/storage/uploads/sticker-pack/kamisato-ayato-1/sticker_3.png',
    'roles' => 'Database',
    'college' => '-',
    'email' => '-'
);

$profile4 = array(
    'name' => 'Gabriel',
    'github' => 'Gabriel010302',
    'photo' => 'https://s3.getstickerpack.com/storage/uploads/sticker-pack/arataki-itto/sticker_7.png',
    'roles' => 'UI/UX',
    'college' => '-',
    'email' => '-'
);

$profile5 = array(
    'name' => 'Helfi Apriliyandi Firdaos',
    'github' => 'Helfi23',
    'photo' => 'https://s3.getstickerpack.com/storage/uploads/sticker-pack/prueba-17/sticker_7.png',
    'roles' => 'Backend',
    'college' => '-',
    'email' => '-'
);

$data_teams = [$profile1, $profile2, $profile3, $profile4, $profile5];
@endphp

@section('content')
    <section class="container flex flex-col min-h-screen py-10">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 sm:w-screen lg:w-screen max-w-7xl">
            <section class="py-10 bg-main-color rounded-lg">
                <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                    <div class="max-w-2xl mx-auto text-center">
                    <p class="mt-5 text-4xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-5xl lg:text-6xl lg:leading-tight font-pj">
                        The Executive Team
                    </p>
                        
                    </div>
                </div>
            </section>
            <section class="container mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 md:gap-4 lg:gap-6">
                    {{-- CARD TEAM --}}
                    @foreach ($data_teams as $team)
                    <div class="card mt-5 bg-main-color shadow-xl">
                        <figure class="px-10 pt-10">
                            <img
                                class="h-60 rounded-full"
                                src="{{ $team['photo'] }}"
                                alt=""
                            />
                        </figure>
                        <div class="card-body items-center text-center">
                            <h1 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $team['name'] }}</h1>

                            <p class="pb-2 text-gray-700 dark:text-gray-400"><span>@</span>{{ $team['github'] }}</p>

                            <div class="overflow-x-auto">
                                <table class="table w-full">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <svg aria-label="suitcase icon" class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 11H10V13H14V11Z"/><path fill-rule="evenodd" clip-rule="evenodd" d="M7 5V4C7 2.89545 7.89539 2 9 2H15C16.1046 2 17 2.89545 17 4V5H20C21.6569 5 23 6.34314 23 8V18C23 19.6569 21.6569 21 20 21H4C2.34314 21 1 19.6569 1 18V8C1 6.34314 2.34314 5 4 5H7ZM9 4H15V5H9V4ZM4 7C3.44775 7 3 7.44769 3 8V14H21V8C21 7.44769 20.5522 7 20 7H4ZM3 18V16H21V18C21 18.5523 20.5522 19 20 19H4C3.44775 19 3 18.5523 3 18Z"/>
                                            </svg>
                                        </td>
                                        <td>
                                            <h1 class="px-2 text-sm">{{ $team['roles'] }}</h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg aria-label="location pin icon" class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z"/><path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z"/>
                                            </svg>
                                        </td>
                                        <td>
                                            <h1 class="px-2 text-sm">{{ $team['college'] }}</h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg aria-label="email icon" class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.00977 5.83789C3.00977 5.28561 3.45748 4.83789 4.00977 4.83789H20C20.5523 4.83789 21 5.28561 21 5.83789V17.1621C21 18.2667 20.1046 19.1621 19 19.1621H5C3.89543 19.1621 3 18.2667 3 17.1621V6.16211C3 6.11449 3.00333 6.06765 3.00977 6.0218V5.83789ZM5 8.06165V17.1621H19V8.06199L14.1215 12.9405C12.9499 14.1121 11.0504 14.1121 9.87885 12.9405L5 8.06165ZM6.57232 6.80554H17.428L12.7073 11.5263C12.3168 11.9168 11.6836 11.9168 11.2931 11.5263L6.57232 6.80554Z"/>
                                            </svg>
                                        </td>
                                        <td>
                                            <h1 class="px-2 text-sm">{{ $team['email'] }}</h1>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- CARD TEAM END--}}
                </div>
            </section>
        </div>
    </section>
@endsection

