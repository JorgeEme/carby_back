@extends('voyager::master')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title" style="padding-right: 0px !important;">
            <i class="voyager-check"></i> Validate Users
        </h1>
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <br>
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <a class="table-title">
                                                User ID
                                            </a>
                                        </th>
                                        <th>
                                            <a class="table-title">
                                                ID 1
                                            </a>
                                        </th>
                                        <th>
                                            <a class="table-title">
                                                ID 2
                                            </a>
                                        </th>
                                        <th>
                                            <a class="table-title">
                                                Card 1
                                            </a>
                                        </th>
                                        <th>
                                            <a class="table-title">
                                                Card 2
                                            </a>
                                        </th>
                                        <th>
                                            <a class="table-title"
                                                href="">Acción</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td><p>{{$user->id}}</p></td>
                                            <td> <img style="width: 150px; height:100px;" src="{{ asset('storage/' . $user->nif_front) }}" alt="ID 1"></td>
                                            <td> <img style="width: 150px; height:100px;" src="{{ asset('storage/' . $user->nif_back) }}" alt="ID 2"></td>
                                            <td> <img style="width: 150px; height:100px;" src="{{ asset('storage/' . $user->card_front) }}" alt="Card 1"></td>
                                            <td> <img style="width: 150px; height:100px;" src="{{ asset('storage/' .$user->card_back) }}" alt="Card 2"></td>
                                            <td>
                                                <div style="display: inline-block">
                                                    <div style="display: inline-block">
                                                        <a href="{{ route('validate-user', ['id' => $user->id]) }}" style="background-color: green"
                                                            class="btn btn-sm view"> <i
                                                                class="voyager-check"></i>
                                                            <span class="hidden-xs hidden-sm">Validate</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- @if ($products->hasPages())
                            <div class="col-sm-12">
                                <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                    <ul class="pagination">

                                        @if ($products->onFirstPage())
                                            <li class="paginate_button previous disabled" id="dataTable_previous">
                                                <a href="#" aria-controls="dataTable" data-dt-idx="0"
                                                    tabindex="0">Previous</a>
                                            </li>{{ $products->previousPageUrl() }}
                                        @else
                                            <li class="paginate_button previous" id="dataTable_previous">
                                                <a href="{{ $products->previousPageUrl() }}"
                                                    aria-controls="dataTable" data-dt-idx="0" tabindex="0">Previous</a>
                                            </li>
                                        @endif


                                        @if ($products->hasMorePages())
                                            <li class="paginate_button next" id="dataTable_next">
                                                <a href="{{ $products->nextPageUrl() }}" aria-controls="dataTable"
                                                    data-dt-idx="2" tabindex="0">Next</a>
                                            </li>

                                        @else
                                            <li class="paginate_button next disabled" id="dataTable_next">
                                                <a href="#" aria-controls="dataTable" data-dt-idx="2"
                                                    tabindex="0">Next</a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        @endif --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
























































































