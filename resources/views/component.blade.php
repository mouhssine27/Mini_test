@extends('layouts.master')

@section('content')
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <i class="fa fa-times"></i>
                        </button>
                        <strong>Success !</strong> {{ session('success') }}
                    </div>
                    @endif
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-outline-success mb-2" data-toggle="modal"
                            data-target="#addComponent">Ajouter</button>
                    </div>
                    @include('partials.popup.addComponent')
                    <div class="widget-content widget-content-area br-6">
                        <table id="zero-config" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th>Coût</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($components as $component)
                                <tr>
                                    <td>{{ $component->name }}</td>
                                    <td> {{ $component->description }}</td>
                                    <td>{{ $component->cost }}</td>
                                    <td>
                                        <a href="#"data-toggle="modal"data-target="#updateComponent{{$component->id }}" class="btn btn-primary btn-sm " role="button" aria-pressed="true"><i class="fa fa-pencil-square-o"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#showComponent{{$component->id }}" class="btn btn-warning btn-sm " role="button" aria-pressed="true"><i class="fa fa-list-alt"></i></a>
                                        <a href="#" data-toggle="modal"data-target="#deleteComponent{{$component->id }}" class="btn btn-danger btn-sm " role="button" aria-pressed="true"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                    @include('partials.popup.showComponent',['componentId'=>$component->id])
                                    @include('partials.popup.updateComponent',['componentId'=>$component->id])
                                    @include('partials.popup.deleteComponent',['componentId'=>$component->id])
                                  
                                </tr>
                                @endforeach
                             
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection
