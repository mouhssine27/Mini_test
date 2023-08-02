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
                            data-target="#addRobot">Ajouter</button>
                    </div>
                    @include('partials.popup.addRobot')
                    <div class="widget-content widget-content-area br-6">
                        <table id="zero-config" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Numéro de série</th>
                                    <th>Nom de modéle</th>
                                    <th>Nom d'employeur</th>
                                    <th>Date de production</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($robots as $robot )
                                <tr>
                                  
                                    <td>{{ $robot->serial_number}}</td>
                                    <td>{{ $robot->modele->name }}</td>
                                    <td>{{ $robot->employee->name }}</td>
                                    <td>{{ $robot->status}}</td>
                                    <td>{{ $robot->production_date}}</td>
                                    <td>
                                        <a href="#"data-toggle="modal"data-target="#updateRobot{{ $robot->id }}" class="btn btn-primary btn-sm " role="button" aria-pressed="true"><i class="fa fa-pencil-square-o"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#showRobot{{ $robot->id }}" class="btn btn-warning btn-sm " role="button" aria-pressed="true"><i class="fa fa-list-alt"></i></a>
                                        <a href="#"data-toggle="modal"data-target="#deleteRobot{{ $robot->id }}" class="btn btn-danger btn-sm " role="button" aria-pressed="true"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                    @include('partials.popup.showRobot',['robotId'=>$robot->id ])
                                    @include('partials.popup.updateRobot',['robotId'=>$robot->id])
                                    @include('partials.popup.deleteRobot',['robotId'=>$robot->id])
                                  
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection
