@extends('admin.layout')

@section('content')

<div class="w-full p-6">
    <!--"Container" for the graphs"-->
    <div class="max-w-full">

        <!--Table Card-->
        <div class="p-3">
            <div class="border-b p-5">
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
                <h5 class="font-bold text-black">Registro de restaurantes</h5>
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