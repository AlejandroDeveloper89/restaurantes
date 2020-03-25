@extends('admin.layout')

@section('content')

<div class="w-full p-6">
    <!--"Container" for the graphs"-->
    <div class="max-w-full">

        <!--Table Card-->
        <div class="p-3">
            <div class="border-b p-3">
                <h5 class="font-bold text-black">Comentarios</h5>
            </div>
            <div class="p-5">
                <table class="border-collapse w-full _clickable">
                    <thead>
                        <tr class="border-b-2 border-orange-200 bg-orange-400 text-xs font-semibold text-white">
                            <th class="px-5 py-3 uppercase tracking-wider hidden lg:table-cell">Restaurante</th>
                            <th class="px-5 py-3 uppercase tracking-wider hidden lg:table-cell">Comentario</th>
                            <th class="px-5 py-3 uppercase tracking-wider hidden lg:table-cell">Estatus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comentarios as $comentario)
                         <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0 text-sm">
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                                {{ $comentario->restaurante->nombre }}
                            </td>
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                                {{ $comentario->comentario }}
                            </td>
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                <label class="switch" data-url="{{ route('admin.aprobar', $comentario) }}">
                                    <input type="checkbox" {{ $comentario->aprovado === 1 ? 'checked' : '' }}>
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--/table Card-->

    </div>

</div>

@endsection