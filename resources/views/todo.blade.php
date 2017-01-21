@extends('layouts.app')

@section('sidebar')

    @include('sidebars.main')

@endsection
 
@section('content')

        
    <div class="panel-heading">To Do List</div>

    <div class="panel-body">
        <p>List of things that need to be done before testing</p>
        
        <h2>Document</h2>
        <ul>
            <li>Write all my notes into word docs in project file</li>
        </ul>
        
        <h2>Other</h2>
        <ul>
            <li>onDelete rules for all tables, and other Column Modifiers for validation</li>
            <li>Update table design with groups</li>
            <li>Update all forms to blade syntax</li>
            <li><strike>Search function</strike></li>
            <li>CRUD for Process</li>
            <li>CRUD for Procedure</li>
            <li>CRUD for Steps</li>
            <li>Notes on a procedure</li>
            <li>Views - Dashboard</li>
            <li>Add Sidebar layout for 
                <ul>
                    <li>dashboard</li>
                    <li>normal view(latest processes, last updates, something like that)</li>
                    <li><strike>procedure</strike></li>
                    <li><strike>process</strike></li>
                </ul>
            </li>
        </ul>
        
        <h2>Process</h2>
        <ul>
            <li>Delete Process. This will delete the process and all information inside of the povit tables.</li>
            <li>Add Groups/Catergory</li>
            <li>Add tags to the process, a way to group them.</li>
            <li>update Process to be able to tag with group</li>
        </ul>

        <h2>Procedure</h2>
        <ul>
            <li>Delete Procedure. This will delete the procedure and all information inside of the povit tables as well as all steps and notes beloging to it.</li>
            <li>Make stepController part of process controller</li>
        </ul>

        <h2>Groups</h2>
        <ul>
            <li>Make groups table</li>
            <li>Add form to sidebar for now (This will later be done in admin dashboard</li>
            <li>Piggyback of process controller</li>
            <li>Add povit table</li>
            <li>Add Model</li>
            <li>Make relationships</li>
            <li>Update route file</li>
            <li>Create sidebar view and add form</li>
        </ul>
    </div>


@endsection