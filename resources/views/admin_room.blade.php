<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<x-app-layout>
    <div>

        <div class="container mx-auto my-3 bg-white ">
                    <div class="flex justify-center">
                        <div class="container mt-5 rounded">
                            <div class="row">
                                @if($sort == "vote")
                                    <form action="/{{$roomId}}/admin">
                                        <select class="form-control" name = "sort" onchange="this.form.submit();">
                                            <option selected value="vote">sort with vote</option>
                                            <option value="time">sort with time</option>
                                        </select>
                                    </form>
                                @else
                                <form action="/{{$roomId}}/admin">
                                        <select class="form-control" name = "sort" onchange="this.form.submit();">
                                            <option value="vote">sort with vote</option>
                                            <option selected value="time">sort with time</option>
                                        </select>
                                    </form>
                                @endif
                                <h4>{{ __('Your room id is '.$roomId) }}</h4>
                                <h4>{{ __('http://127.0.0.1:8000/room/'.$roomId) }}</h4>
                            </div>
                        </div>
                        
                    </div>
        </div>


        @foreach($event as $row)
            @if($row->room_id == $roomId)
            <div class="card rounded mx-4 my-2">
                <div class="card-body">
                    @if($row->anonymous == 1)
                      <p class="card-text"> {{Auth::user()->name}} </p>
                    @else
                        <p class="card-text"> Anonymous </p>
                    @endif
                    <p class="card-text">{{$row->text}}</p>
                    <p class="card-text">Value voted by users: {{ $row->vote }}</p>
                    @if(empty($voted))
                    <form method="POST" action="/delete_question">
                        @csrf
                        <input type="hidden" name="voted" value="true">
                        <input type="hidden" name="id" value= "{{$row->id}}">
                        <button type="submit" class="btn btn-danger">delete</button>
                    </form>
                    @endif
                </div>
            </div>
            @endif
        @endforeach
    </div>

</x-app-layout>