@extends('layouts.app')

@section('title', 'Página Inicial')

@section('styles')
    <link rel="stylesheet" href="/css/dashboard.css">
@endsection
@section('content')
<main>
    <h1>Olá {{$user->name}}</h1>
    <a class="create" href="{{route('create-a-task')}}">Criar uma task</a>
    <div>
        <ul id="category">
            @if (!empty($category))
            <li><a href="?category=todos">Todos</a></li>
            @foreach ($category as $item)
                    @if ($item != 'sem categoria')
                        <li><a href="?category={{$item}}">{{ucfirst($item)}}</a></li>
                    @endif
                @endforeach
            @endif
        </ul>
    </div>
    <div>
        @if (!$cat || $cat == 'todos')
            @foreach ($tasks as $item)
                <div class="tasks">
                    <div class="tasks-title">
                        <p id="taskName-{{$item->id}}">{{$item->name}}</p>
                    </div>
                    <div class="tasks-icons">
                        <form method="POST" action="{{route('update')}}" class="form-edit-task" id="taskSave-{{$item->id}}">
                            @csrf
                            <input type="text" name="task" value="{{$item->name}}">
                            <input type="text" name="category" value="{{$item->category}}">
                            <input type="hidden" name="id" value="{{$item->id}}">
                            <button type="submit" style="background-color: transparent;">
                                <ion-icon class="icon-save" name="chevron-down-outline"></ion-icon>
                            </button>
                        </form>
                        <div class="icons-main" id="icons-main-{{$item->id}}">
                            <div style="margin:auto">
                                <a href="#" onclick="edit({{$item->id}})">
                                    <ion-icon class="icon-edit" name="create-outline">
                                </a>
                            </div>
                            <form method="POST" action="{{ route('destroy') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$item->id}}">
                                <button type="submit" style="background-color: transparent;">
                                    <ion-icon class="icon-delete" name="trash-outline"></ion-icon>
                                </button>
                            </form>                    
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

        @if ($cat)
            @foreach ($tasks as $item)
                @if ($item->category == $cat)
                <div class="tasks">
                    <div class="tasks-title">
                        <p id="taskName-{{$item->id}}">{{$item->name}}</p>
                    </div>
                    <div class="tasks-icons">
                        <form method="POST" action="{{route('update')}}" class="form-edit-task" id="taskSave-{{$item->id}}">
                            @csrf
                            <input type="text" name="task" value="{{$item->name}}">
                            <input type="text" name="category" value="{{$item->category}}">
                            <input type="hidden" name="id" value="{{$item->id}}">
                            <button type="submit" style="background-color: transparent;">
                                <ion-icon class="icon-save" name="chevron-down-outline"></ion-icon>
                            </button>
                        </form>
                        <div class="icons-main" id="icons-main-{{$item->id}}">
                            <div style="margin:auto">
                                <a href="#" onclick="edit({{$item->id}})">
                                    <ion-icon class="icon-edit" name="create-outline">
                                </a>
                            </div>
                            <form method="POST" action="{{ route('destroy') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$item->id}}">
                                <button type="submit" style="background-color: transparent;">
                                    <ion-icon class="icon-delete" name="trash-outline"></ion-icon>
                                </button>
                            </form>                    
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        @endif
    </div>
</main>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
    function edit(id) {
        document.getElementById('taskName-'+id).style.display = 'none'
        document.getElementById('icons-main-'+id).style.display = 'none'
        document.getElementById('taskSave-'+id).style.display = 'flex'
    }
</script>

@endsection






