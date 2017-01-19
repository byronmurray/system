@extends('layouts.app')

@section('sidebar')

    <div class="panel-heading">Side bar</div>

    <div class="panel-body">
        this is the sidebar
    </div>

@endsection
 
@section('content')

        
    <div class="panel-heading">To Do List</div>

    <div class="panel-body">
        <p>List of things that need to be done before testing</p>

        <ul>
            <li>Search function</li>
            <li>CRUD for Process</li>
            <li>CRUD for Procedure</li>
            <li>CRUD for Steps</li>
            <li>Notes on a procedure</li>
            <li>Views - Dashboard</li>
            <li>Add Sidebar layout for dashboard and normal view</li>
        </ul>
        
        <h2>Process</h2>
        <ul>
            <li>Delete Process. This will delete the process and all information inside of the povit tables.</li>
            <li>Add Groups/Catergory</li>
            <li>Add tags to the process, a way to group them.</li>
        </ul>

        <h2>Procedure</h2>
        <ul>
            <li>Delete Procedure. This will delete the procedure and all information inside of the povit tables as well as all steps and notes beloging to it.</li>
        </ul>
    </div>


@endsection