@extends('layouts.app')

@section('nav')
    @include('ui.uinav')
@endsection


@section('content')
    <h1 class="text-3xl text-center">Crear Vacante</h1>

    <div class="container mx-auto">
        <form action="" class="bg-gray-300 max-w-lg mx-auto my-10 border-2 rounded border-green-600 px-2 py-4">

            <div class="my-3">
                <label for="titulo"
                       class="block text-gray-700 text-sm my-2">Titulo Vacante:
                </label>
                <input id="titulo"
                       type="text"
                       class="p-3 bg-gray-100 rounded form-imput w-full  @error('titulo') border border-red-500 @enderror"
                       placeholder="Backend o Frontend"
                       name="titulo"
                       value="{{ old('titulo') }}"
                       autocomplete="titulo"
                       autofocus>
                @error('titulo')
                    <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="my-3">
                <label for="categoria_id"
                       class="block text-gray-700 text-sm my-2">Categoria:
                </label>
                <select id="categoria_id"
                       type="text"
                       class="p-3 bg-gray-100 apperence-none border border-gray-200 rounded form-imput w-full focus:bg-white  @error('titulo') border-red-500 @enderror"
                       name="categoria_id"
                       value="{{ old('categoria_id') }}"
                       autocomplete="categoria_id"
                       autofocus>
                    <option selected disabled value="0">--Seleccione--</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
                @error('titulo')
                    <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="my-3">
                <label for="experiencia_id"
                       class="block text-gray-700 text-sm my-2">Experiencia:
                </label>
                <select id="categoria_id"
                       type="text"
                       class="p-3 bg-gray-100 apperence-none border border-gray-200 rounded form-imput w-full focus:bg-white  @error('titulo') border-red-500 @enderror"
                       name="experiencia_id"
                       value="{{ old('experiencia_id') }}"
                       autocomplete="experiencia_id"
                       autofocus>
                    <option selected disabled value="0">--Seleccione--</option>
                    @foreach($experiencias as $experiencia)
                        <option value="{{ $experiencia->id }}">{{ $experiencia->nombre }}</option>
                    @endforeach
                </select>
                @error('titulo')
                    <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="my-3 mx-auto">
                <input type="submit"
                       class="block uppercase bg-green-500 hover:bg-green-700 p-3 text-white font-bold focus:outline focus:shadow-outline"
                       value="Publicar Vacante">
            </div>
        </form>
    </div>

@endsection

