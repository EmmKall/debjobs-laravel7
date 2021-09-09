@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/css/medium-editor.min.css" integrity="sha512-zYqhQjtcNMt8/h4RJallhYRev/et7+k/HDyry20li5fWSJYSExP9O07Ung28MUuXDneIFg0f2/U3HJZWsTNAiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

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
                       class="block bg-gray-100 apperance-none border border-gray-200 text-gray-700 leading-tight rounded form-imput w-full focus:outline-none focus:bg-white focus:border-gray-500 p-3 @error('titulo') border-red-500 @enderror"
                       name="categoria_id"
                       value="{{ old('categoria_id') }}"
                       autocomplete="categoria_id"
                       autofocus>
                    <option selected disabled value="0" class="opacity-25">--Seleccione--</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
                @error('categoria_id')
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
                       class="block bg-gray-100 apperance-none border border-gray-200 text-gray-700 leading-tight rounded form-imput w-full focus:outline-none focus:bg-white focus:border-gray-500 p-3 @error('titulo') border-red-500 @enderror"
                       name="experiencia_id"
                       value="{{ old('experiencia_id') }}"
                       autocomplete="experiencia_id"
                       autofocus>
                    <option selected disabled value="0">--Seleccione--</option>
                    @foreach($experiencias as $experiencia)
                        <option value="{{ $experiencia->id }}">{{ $experiencia->nombre }}</option>
                    @endforeach
                </select>
                @error('experiencia_id')
                    <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="my-3">
                <label for="ubicacion_id"
                       class="block text-gray-700 text-sm my-2">Ubicación:
                </label>
                <select id="ubicacion_id"
                       type="text"
                       class="block bg-gray-100 apperance-none border border-gray-200 text-gray-700 leading-tight rounded form-imput w-full focus:outline-none focus:bg-white focus:border-gray-500 p-3 @error('titulo') border-red-500 @enderror"
                       name="experiencia_id"
                       value="{{ old('ubicacion_id') }}"
                       autocomplete="ubicacion_id"
                       autofocus>
                    <option selected disabled value="0">--Seleccione--</option>
                    @foreach($ubicaciones as $ubicacion)
                        <option value="{{ $ubicacion->id }}">{{ $ubicacion->nombre }}</option>
                    @endforeach
                </select>
                @error('ubicacion_id')
                    <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="my-3">
                <label for="salario_id"
                       class="block text-gray-700 text-sm my-2">Salario:
                </label>
                <select id="salario_id"
                       type="text"
                       class="block bg-gray-100 apperance-none border border-gray-200 text-gray-700 leading-tight rounded form-imput w-full focus:outline-none focus:bg-white focus:border-gray-500 p-3 @error('titulo') border-red-500 @enderror"
                       name="salario_id"
                       value="{{ old('salario_id') }}"
                       autocomplete="salario_id"
                       autofocus>
                    <option selected disabled value="0">--Seleccione--</option>
                    @foreach($salarios as $salario)
                        <option value="{{ $salario->id }}">{{ $salario->nombre }}</option>
                    @endforeach
                </select>
                @error('salario_id')
                    <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="my-3">
                <label for="descripcion"
                       class="block text-gray-700 text-sm my-2">Descripción:
                </label>

                <div class="editable p-3 bg-gray-100 rounded border border-green-600 form-input text-gray-700"></div>
                <input type="hidden" name="descripcion" id="descripcion">

            </div>

            <div class="my-3">
                <label for="imagen">Imagen vacante</label>
                <p class="text-center rounded my-1 py-1 bg-blue-100 text-blue-700">Solo un archivo</p>
                <div id="dropzoneDevjobs" class="dropzone rounded bg-gray-100"></div>
                <input type="hidden" id="imagen" name="imagen" value=""> 
                <p id="error"></p>
            </div>

            <div class="my-3 mx-auto">
                <input type="submit"
                       class="block uppercase bg-green-500 hover:bg-green-700 p-3 text-white font-bold focus:outline focus:shadow-outline"
                       value="Publicar Vacante">
            </div>
        </form>
    </div>

@endsection

@section('plugins')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/js/medium-editor.min.js" integrity="sha512-5D/0tAVbq1D3ZAzbxOnvpLt7Jl/n8m/YGASscHTNYsBvTcJnrYNiDIJm6We0RPJCpFJWowOPNz9ZJx7Ei+yFiA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js" integrity="sha512-VQQXLthlZQO00P+uEu4mJ4G4OAgqTtKG1hri56kQY1DtdLeIqhKUp9W/lllDDu3uN3SnUNawpW7lBda8+dSi7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>

        Dropzone.autoDiscover = false;
        document.addEventListener('DOMContentLoaded', () => {
            //Medium editor
            const editor = new MediumEditor('.editable', {
                toobar: {
                    buttons: ['bold', 'italic', 'underline', 'quote', 'anchor', 'justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull', 'orderedList', 'unorderedList', 'h2', 'h3'],
                    static: true,
                    sticky: true,
                },
                placeholder: {text: 'Información de la vacante'},
            });

            editor.subscribe('editableInput', function(event, editable) {
                const contenido = editor.getContent();
                document.querySelector('#descripcion').value = contenido;
            });

            //Dropzone
            const dropzoneDevjobs = new Dropzone('#dropzoneDevjobs', {
                url: "/vacantes/imagen",
                dictDefaultMessage: 'Sube aqui tu archivo',
                acceptedFiles: ".png, .jpg, .jpeg, .gif, .bmp",
                addRemoveLinks: true,
                dictRemoveFile: 'Eliminar Archivo',
                maxFile: 1,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content,
                },
                success: function( file, response ){
                    document.querySelector('#imagen').value = response.correcto;
                    file.nombreServidor = response.correcto;
                    document.querySelector( '#error').textContent = '';
                    document.querySelector( '#error').classList = '';
                },
                error: function( file, response ){
                    document.querySelector( '#error').textContent = 'No se pudo subir el archivo';
                    document.querySelector( '#error').classList.add('rounded', 'bg-red-300', 'text-red-700', 'text-center', 'py-1', 'my-1');
                },
                maxfilesexceeded: function( file ){
                    if( this.files[1] != null ){
                        this.removeFile( this.files[0] );
                        this.addFile( file );
                    }
                },
                removefile: function( file, response ){
                    file.previewElement.parentNode.removeChild( file.previewElement );
                    params = {
                        imagen: file.nombreServidor
                    };
                    axios.post('vacantes/borrarimg', params)
                        .then( respuesta => console.log( respuesta) );
                }
            });

        });
    </script>

@endsection
