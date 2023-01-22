<x-app-layout>
    <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
        @foreach ($chirps as $chirp)
            <!---->
            @if ($chirp->acceso || $chirp->user->is(auth()->user()))
                <div class="p-6 flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-800"><b>Usuario:</b> {{ $chirp->user->name }}</span><br><br>
                                <span class="text-gray-800"><b>Titulo:</b> {{ $chirp->titulo }}</span><br><br>
                                <span class="text-gray-800"><b>Extracto:</b> {{ $chirp->extracto }}</span><br><br>
                                <span class="text-gray-800"><b>Contenido:</b> {{ $chirp->contenido }}</span><br><br>
                                @if ($chirp->comentable == true)
                                    <span class="text-gray-800">Este post es comentable</span><br><br>
                                @endif
                                @if ($chirp->comentable == false)
                                    <span class="text-gray-800">Este post NO es comentable</span><br><br>
                                @endif
                                <small
                                    class="ml-2 text-sm text-gray-600">{{ $chirp->created_at->format('j M Y, g:i a') }}</small>
                                @unless($chirp->created_at->eq($chirp->updated_at))
                                    <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                                @endunless
                            </div>
                            @if ($chirp->user->is(auth()->user()))
                                <x-dropdown>
                                    <x-slot name="trigger">
                                            <button class="bg-red-600 sm:rounded-lg">
                                                <x-dropdown-link :href="route('chirps.edit', $chirp)" class="text-white">
                                                    {{ __('Edit') }}
                                                </x-dropdown-link>
                                            </button>
                                            <button class="bg-blue-600 sm:rounded-lg">
                                                <form method="POST" action="{{ route('chirps.destroy', $chirp) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <x-dropdown-link :href="route('chirps.destroy', $chirp)" class="text-white"
                                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                                        {{ __('Delete') }}
                                                    </x-dropdown-link>
                                                </form>
                                            </button>
                                    </x-slot>
                                    <x-slot name="content">
                                    </x-slot>
                                </x-dropdown>
                            @endif
                        </div>
                        <p class="mt-4 text-lg text-gray-900">{{ $chirp->message }}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</x-app-layout>
