@extends('admin.layout')

@section('content')

<div class="w-full p-6">
    <!--"Container" for the graphs"-->
    <div class="max-w-full">

        <!--Table Card-->
        <div class="p-3">
            @if(Session::has('status'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                    <div>
                    <p class="font-bold">Buen trabajo</p>
                    <p class="text-sm">Restaurante registrado correctamente</p>
                    </div>
                </div>
                </div>
                <br/>
                @endif

            <div class="border-b p-5 flex justify-between">
                <h5 class="font-bold text-black">Registro de restaurantes</h5>
                <a href="{{ route('admin.download') }}" title="Descarga de restaurantes">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="32px" height="32px"><path fill="#e3f2ff" d="M57,51H39c-1.105,0-2-0.895-2-2V13c0-1.105,0.895-2,2-2h18c1.105,0,2,0.895,2,2v36 C59,50.105,58.105,51,57,51z"/><path fill="#72caaf" d="M36.832,57.948c0,0.426-0.235,0.688-0.376,0.805c-0.141,0.118-0.435,0.304-0.859,0.231h0.001 l-30.69-5.416c-1.007-0.178-1.738-1.049-1.738-2.072V10.504c0-1.023,0.731-1.894,1.738-2.072l30.69-5.416 c0.424-0.071,0.719,0.113,0.859,0.231c0.141,0.117,0.376,0.379,0.376,0.805V57.948z"/><path fill="#5dbc9d" d="M7.031,30c-2.221,0-4.017,1.81-4,4.031l0.137,17.465c0,1.023,0.731,1.894,1.738,2.072l30.69,5.416h0 c0.424,0.073,0.719-0.113,0.859-0.231c0.141-0.117,0.376-0.379,0.376-0.805l0.144-23.923c0.013-2.219-1.781-4.024-4-4.024H7.031z"/><path fill="#97e0bb" d="M36.456,3.247c-0.141-0.118-0.435-0.302-0.859-0.231L4.907,8.432 C3.899,8.61,3.168,9.481,3.168,10.504v4c0-1.023,0.731-1.894,1.738-2.072l30.69-5.416c0.424-0.071,0.719,0.113,0.859,0.231 c0.141,0.117,0.376,0.379,0.376,0.805v-4C36.832,3.626,36.596,3.364,36.456,3.247z"/><path fill="#c5e4fa" d="M37 11H43V51H37z"/><path fill="#8d6c9f" d="M57,10H38V5.384c0-0.889-0.391-1.727-1.072-2.298c-0.681-0.572-1.573-0.813-2.45-0.656L5.305,7.578 C3.39,7.916,2,9.572,2,11.517v38.967c0,1.944,1.39,3.601,3.305,3.938l29.174,5.148h0c0.174,0.031,0.349,0.046,0.523,0.046 c0.7,0,1.381-0.244,1.926-0.702C37.609,58.343,38,57.505,38,56.616V52h19c1.654,0,3-1.346,3-3V13C60,11.346,58.654,10,57,10z M36,56.616c0,0.405-0.224,0.654-0.357,0.766c-0.133,0.112-0.416,0.289-0.817,0.22h0L5.652,52.453C4.695,52.284,4,51.456,4,50.483 V11.517c0-0.973,0.695-1.801,1.652-1.97l29.173-5.148c0.401-0.067,0.684,0.107,0.817,0.22C35.776,4.729,36,4.979,36,5.384V56.616z M58,49c0,0.552-0.449,1-1,1H38v-6h3c0.552,0,1-0.447,1-1s-0.448-1-1-1h-3v-4h3c0.552,0,1-0.447,1-1s-0.448-1-1-1h-3v-4h3 c0.552,0,1-0.447,1-1s-0.448-1-1-1h-3v-4h3c0.552,0,1-0.447,1-1s-0.448-1-1-1h-3v-4h3c0.552,0,1-0.447,1-1s-0.448-1-1-1h-3v-6h19 c0.551,0,1,0.448,1,1V49z"/><path fill="#8d6c9f" d="M51 18h-6c-.552 0-1 .447-1 1s.448 1 1 1h6c.552 0 1-.447 1-1S51.552 18 51 18zM51 24h-6c-.552 0-1 .447-1 1s.448 1 1 1h6c.552 0 1-.447 1-1S51.552 24 51 24zM51 30h-6c-.552 0-1 .447-1 1s.448 1 1 1h6c.552 0 1-.447 1-1S51.552 30 51 30zM51 36h-6c-.552 0-1 .447-1 1s.448 1 1 1h6c.552 0 1-.447 1-1S51.552 36 51 36zM51 42h-6c-.552 0-1 .447-1 1s.448 1 1 1h6c.552 0 1-.447 1-1S51.552 42 51 42z"/><path fill="#faefde" d="M26.545,20.161c-0.463-0.301-1.083-0.17-1.383,0.294l-5.662,8.71l-5.662-8.71 c-0.301-0.464-0.921-0.595-1.383-0.294c-0.463,0.302-0.595,0.921-0.293,1.384L18.307,31l-6.146,9.455 c-0.301,0.463-0.169,1.082,0.293,1.384C12.624,41.948,12.812,42,12.999,42c0.327,0,0.648-0.16,0.839-0.455l5.662-8.71l5.662,8.71 C25.353,41.84,25.674,42,26.001,42c0.187,0,0.376-0.052,0.544-0.161c0.463-0.302,0.595-0.921,0.293-1.384L20.693,31l6.146-9.455 C27.14,21.082,27.008,20.463,26.545,20.161z"/></svg>
                </a>
            </div>
            <div class="p-5">

                <div class="bg-white border rounded shadow">
                    <div class="p-5">

                        <form action="{{ route('admin.restaurante.store') }}" method="post" id="frmRestaurantes" autocomplete="off">
                            @csrf               
                            <div class="bg-white px-8 pt-6 pb-8 flex flex-col">
                                <div class="-mx-3 md:flex mb-6">
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                                            Nombre
                                        </label>
                                        <div class="flex flex-wrap items-stretch w-full mb-1 relative input-group">
                                            <div class="flex -mr-px">
                                                <span class="flex items-center leading-normal bg-gray-300 rounded rounded-r-none border border-r-0 border-grey-light px-3 whitespace-no-wrap text-gray-500 text-sm">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="nombre" class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border h-10 border-grey-light rounded rounded-l-none px-3 relative focus:border-blue focus:shadow">
                                        </div>
                                    </div>
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                                            Dirección
                                        </label>
                                        <div class="flex flex-wrap items-stretch w-full mb-1 relative input-group">
                                            <div class="flex -mr-px">
                                                <span class="flex items-center leading-normal bg-gray-300 rounded rounded-r-none border border-r-0 border-grey-light px-3 whitespace-no-wrap text-gray-500 text-sm">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="direccion" class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border h-10 border-grey-light rounded rounded-l-none px-3 relative focus:border-blue focus:shadow">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="-mx-3 md:flex mb-6">
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                                            Teléfono
                                        </label>
                                        <div class="flex flex-wrap items-stretch w-full mb-1 relative input-group">
                                            <div class="flex -mr-px">
                                                <span class="flex items-center leading-normal bg-gray-300 rounded rounded-r-none border border-r-0 border-grey-light px-3 whitespace-no-wrap text-gray-500 text-sm">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="telefono" class="simple-calendar flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border h-10 border-grey-light rounded rounded-l-none px-3 relative focus:border-blue focus:shadow">
                                        </div>
                                    </div>
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                                            Horario
                                        </label>
                                        <div class="flex flex-wrap items-stretch w-full mb-1 relative input-group">
                                            <div class="flex -mr-px">
                                                <span class="flex items-center leading-normal bg-gray-300 rounded rounded-r-none border border-r-0 border-grey-light px-3 whitespace-no-wrap text-gray-500 text-sm">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="horario" class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border h-10 border-grey-light rounded rounded-l-none px-3 relative focus:border-blue focus:shadow">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="m-3">
                                    <button type="submit" class="w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-orange-400 hover:border-orange-500 hover:bg-orange-400 hover:text-white shadow-md py-2 px-6 inline-flex items-center float-right">
                                      <span class="mx-auto">Registrar</span>
                                    </button>
                                </div>
        
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
        <!--/table Card-->

    </div>

</div>

@endsection