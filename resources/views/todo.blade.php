@extends('layouts.app')

@section('sidebar')

    @include('sidebars.main')

@endsection
 
@section('content')

        
    <div class="panel-heading">To Do List</div>

    <div class="panel-body">
        <p>List of things that need to be done before testing</p>
        
        <h2>Important</h2>
        <ul>
            <li>Make all urls friendly</li>
            <li>Validation on all forms</li>
            <li>Users on all tables and relationships</li>
            <li>Tidy up urls - Make the title the slug</li>
            <li>update procedure get var in url (Sidebar display)</li>
            <li>onDelete rules for all tables, and other Column Modifiers for validation</li>
            <li>Update table design with groups (Word DOcs)</li>
            <li>Search function - Display results</li>
        </ul>
        
        <h2>Other</h2>
        <ul>
            <li>Update all forms to blade syntax</li>
            <li>Views - Dashboard 
                <ul>
                    <li>Admin</li>
                    <li>Staff</li>
                </ul> 
            </li>
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
            <li>Notes on a procedure</li>
            <li>Delete Procedure. This will delete the procedure and all information inside of the povit tables as well as all steps and notes beloging to it.</li>
            <li>Make stepController part of process controller</li>
        </ul>

        <h2>Groups</h2>
        <ul>
            <li><strike>Make groups table</strike></li>
            <li><strike>Add form to sidebar for now (This will later be done in admin dashboard</strike></li>
            <li><strike>Piggyback of process controller</strike></li>
            <li><strike>Add povit table</strike></li>
            <li><strike>Add Model</strike></li>
            <li><strike>Make relationships</strike></li>
            <li><strike>Update route file</strike></li>
            <li><strike>Create sidebar view and add form</strike></li>
        </ul>

        <h2>Document</h2>
        <ul>
            <li><stike>Write all my notes into word docs in project file</stike></li>
        </ul>


    </div>


@endsection