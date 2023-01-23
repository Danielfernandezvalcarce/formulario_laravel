<x-app-layout>
<!--Para meter los comentarios-->
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
        <form method="POST" action="{{ route('chirps.store') }}">
            @csrf
            <label for="titulo">{{ __('Title') }}</label>
            <textarea
                name="titulo"
                type="text"
                placeholder="{{ __('What\'s the title?') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" required
            >{{ old('titulo') }}</textarea>
            @error('titulo')
            <br>
            <small style="color:red">{{$message}}</small><br>
            @enderror
            <label for="extracto">{{ __('Extract') }}</label>
            <textarea
            name="extracto"
            type="text"
            placeholder="{{ __('What\'s the extract?') }}"
            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" required
            >{{ old('extracto') }}</textarea>
            @error('extracto')
            <br>
            <small style="color:red">{{$message}}</small><br>
            @enderror
            <label for="contenido">{{ __('Content') }}</label>
            <textarea
            name="contenido"
            type="text"
            placeholder="{{ __('What\'s the content?') }}"
            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" required
            >{{ old('contenido') }}</textarea>
            @error('contenido')
            <br>
            <small style="color:red">{{$message}}</small><br>
            @enderror
            <label for="caducable">Caducable</label>
            <input type="checkbox" name="caducable">
            <label for="comentable">Comentable</label>
            <input type="checkbox" name="comentable"><br>
            <label for="acceso">{{__('Access')}}</label>
            <select name="acceso">
                <option value="1">{{__('Public')}}</option>
                <option value="0">{{__('Private')}}</option>
            </select><br>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Post') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>












