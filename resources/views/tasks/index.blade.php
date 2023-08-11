@extends ('layout.app')
 

@section('content')
<section class="main_section">
    <div>
        <div  class="date">
            <h1 id="current-day" ></h1>
            <p id="current-fullday"></p>
        </div>
        <form method="post" action="/createTodo">
            @csrf
            <div class="input-group mb-3">
                <input name="todo" type="text" class="form-control" placeholder="Write Todos" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn  btn-outline-success" type="submit" id="button-addon2">Add Todo</button>
            </div>
        </form>
        <div class="tasks">
            <ol>
                @foreach ($datas as $data)
                    <li>
                        <div class="d-flex justify-content-between">
                            <div style="{{ $data->complete ? 'text-decoration: line-through;' : '' }}">{{$data->todo}}</div>
                            <div class="button_container">
                                <form method="POST" action="/completeTodo{{$data->id}}">
                                    @method('PATCH')
                                    @csrf
                                    <button {{ $data->complete ? 'disabled' : '' }}  type="submit" class="btn btn-success"><i class="bi bi-check-circle-fill"></i></button>
                                </form>
                                <form method="POST" action="/editTodo{{$data->id}}">
                                    @method('PATCH')
                                    @csrf
                                    <button type="submit" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></button>
                                </form>
                            </div>
                        </div>
                    </li>
                
                @endforeach
            </ol>
        </div>
    </div>
</section>

@endsection 





       