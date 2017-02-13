@extends('layouts.app')

@section('sidebar')

    @include('sidebars.main')

@endsection
 
@section('content')

<div class="col-md-7">
    <div class="panel panel-default">

        
        <div class="panel-heading">To Do List</div>

        <div class="panel-body">
            
            <h2>Important <small>List of things that need to be done before testing</small></h2>
            <ul>
                <li>Update table design with groups (Word DOcs)</li>
                <li><strike>Create some quick and dirty test data</strike></li>
                <li><strike>update procedure get var in url (Sidebar display)</strike></li>
                <li><strike>steps (Delete)</strike></li>
                <li><strike>User Auth</strike></li>
                <li><strike>add create/assign buttons for procedure view</strike></li>
                <li><strike>add create view for procedure (pop up)</strike></li>
                <li><strike>add assign view for procedure (pop up)</strike></li>
                <li><strike>Display - all views correctly</strike></li>
                <li><strike>Search results links</strike></li>
                <li><strike>Add counters - Group for now</strike></li>
                <li><strike>Add create views for steps</strike></li>
                <li><strike>Make all urls friendly</strike></li>
                <li><strike>Users on all tables and relationships</strike></li>
                <li>Search function - Display results <ul>
                    <li><strike>Processes</strike></li>
                    <li><strike>Procedures</strike></li>
                </ul></li>
                <li><strike>steps (Edit)</strike></li>
                <li>Validation on all forms <ul>
                    <li><strike>steps create</strike></li>
                    <li><strike>steps edit</strike></li>
                    <li><strike>processes</strike></li>
                    <li><strike>Groups</strike></li>
                    <li><strike>procedures</strike></li>
                </ul></li>
            </ul>
            
            <h2>Stage two</h2>
            <ul>
                <li>User roles</li>
                <li>User access and permissions</li>
                <li>onDelete rules for all tables, and other Column Modifiers for validation</li>
                <li>Look at adding some better site navigation</li>
                <li>DRY Code<ul>
                    <li>Groups into own controller</li>
                    <li>Make resources for all the routes</li>
                    <li>Update all forms to blade syntax</li>
                    <li>create a flash folder and add as a partial</li>
                    <li>create partials for all the pop ups</li>
                    <li>Move step view to their own folder</li>
                </ul></li>
                <li>Views - Dashboard 
                    <ul>
                        <li>Admin</li>
                        <li>Staff</li>
                    </ul> 
                </li>
                <li>Sidebar layouts 
                    <ul>
                        <li>dashboard</li>
                        <li>normal view(latest processes, last updates, something like that)</li>
                        <li><strike>procedure</strike></li>
                        <li><strike>process</strike></li>
                    </ul>
                </li>
            </ul>

            <h2>Steps</h2>

            <ul>
                <li>Add Links 2 other procedures</li>
                <li>Add file manager</li>
                <li>Links 2 documents</li>
                <li>Adding images</li>
            </ul>

            <h2>Process</h2>
            <ul>
                <li>Delete Process. This will delete the process and all information inside of the pivot tables.</li>
                <li>Add Groups/Category</li>
                <li>Add tags to the process, a way to group them.</li>
                <li><strike>update Process to be able to tag with group</strike></li>
            </ul>

            <h2>Procedure</h2>
            <ul>
                <li>Notes on a procedure</li>
                <li>Delete Procedure. This will delete the procedure and all information inside of the pivot tables as well as all steps and notes belonging to it.</li>
                <li>Make stepController part of process controller (no make a seprate controller)</li>
            </ul>

            <h2>Notes/Notifications</h2>
            <ul>
                <li>Map and design, what views and tables will be involved, what can each role do, (CRUD)</li>
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

            <h2>Style</h2>

            <ul>
                <li>Create mock ups</li>
                <li>Install Less</li>
                <li>Install elixir</li>
                <li>Write Vue (JS)</li>
                <li>Write Less (css)</li>
            </ul>

            <h2>Document</h2>
            <ul>
                <li><stike>Write all my notes into word docs in project file</stike></li>
            </ul>


        </div>
    </div>
</div>


@endsection