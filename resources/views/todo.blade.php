@extends('layouts.app')

@section('sidebar')

    @include('sidebars.main')

@endsection
 
@section('content')

<div class="col-md-7">
    <div class="panel panel-default">

        
        <div class="panel-heading">To Do List</div>

        <div class="panel-body">
            <p>List of things that need to be done before testing</p>
            
            <h2>Important</h2>
            <li>add create/assign buttons for procedure view</li>
            <li>add create view for procedure (pop up)</li>
            <li>add assign view for procedure (pop up)</li>
            <li><strike>Display - all views correctly</strike></li>
            <li><strike>Search results links</strike></li>
            <li><strike>Add counters - Group for now</strike></li>
            <li>Add create views for steps and finish CRUD</li>
            <li>Look at adding some better site navigation</li>
            <ul>
                <li>CRUD <ul>
                    <li>Groups</li>
                    <li>steps</li>
                    <li>processes</li>
                    <li>procedures</li>
                </ul></li>
                <li><strike>Make all urls friendly</strike></li>
                <li>Validation on all forms <ul>
                    <li><strike>steps create</strike></li>
                    <li>steps edit</li>
                    <li><strike>processes</strike></li>
                    <li><strike>Groups</strike></li>
                    <li><strike>procedures</strike></li>
                </ul></li>
                <li><strike>Users on all tables and relationships</strike></li>
                <li>update procedure get var in url (Sidebar display)</li>
                <li>onDelete rules for all tables, and other Column Modifiers for validation</li>
                <li>Update table design with groups (Word DOcs)</li>
                <li>Search function - Display results <ul>
                    <li><strike>Processes</strike></li>
                    <li>Procedures</li>
                </ul></li>
            </ul>
            
            <h2>Other</h2>
            <ul>
                <li>Update all forms to blade syntax</li>
                <li>create a flash folder and add as a partial</li>
                <li>Move step view to their own folder</li>
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
                <li>Delete Process. This will delete the process and all information inside of the pivot tables.</li>
                <li>Add Groups/Category</li>
                <li>Add tags to the process, a way to group them.</li>
                <li>update Process to be able to tag with group</li>
            </ul>

            <h2>Procedure</h2>
            <ul>
                <li>Notes on a procedure</li>
                <li>Delete Procedure. This will delete the procedure and all information inside of the pivot tables as well as all steps and notes belonging to it.</li>
                <li>Make stepController part of process controller</li>
            </ul>

            <h2>Notes/Notifications</h2>
            <ul>
                <li>Map and design, what views and tables will be involved, what can each role do (CRUD)</li>
                <li>make <ul>
                    <li>Controller</li>
                    <li>table</li>
                    <li>views</li>
                    <li>Relationships</li>
                    <li>form</li>
                </ul>
                </li>

            </ul>

            <h2>Groups</h2>
            <ul>
                <li><strike>Make groups table</strike></li>
                <li><strike>Add form to sidebar for now (This will later be done in admin dashboard</strike></li>
                <li><strike>Piggyback of process controller</strike></li>
                <li><strike>Add pivot table</strike></li>
                <li><strike>Add Model</strike></li>
                <li><strike>Make relationships</strike></li>
                <li><strike>Update route file</strike></li>
                <li><strike>Create sidebar view and add form</strike></li>
                <li>Create its own controller, remove from processes</li>
            </ul>

            <h2>Document</h2>
            <ul>
                <li><stike>Write all my notes into word docs in project file</stike></li>
            </ul>


        </div>
    </div>
</div>


@endsection