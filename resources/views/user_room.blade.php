<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<x-app-layout>
    <!-- submit question bar -->
    <div class="container mx-auto my-3 bg-white ">
                <div class="flex justify-center">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-12">
                                <form action="/submit-question/{{$roomId}}" method="post">
                                    @csrf
                                    @error('question')
                                        <span class="text-danger my-2">{{$message}}</span>
                                    @enderror
                                    <div class="input-group">
                                    <input type="text" class="form-control" name="question" placeholder="Ask your question here...">
                                    <div class="input-group-append" style="display: flex;">
                                        <button class="btn btn-primary mx-2 " type="submit" style="width: 100%;">
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
    </div>

    <div>
        @foreach($event as $row)
            @if($row->room_id == $roomId)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">title</h5>
                    <p class="card-text">{{$row->text}}</p>
                    <p class="card-text">Value voted by users: {{ $row->vote }}</p>
                    @if(empty($voted))
                    <form method="POST" action="/increase_vote">
                        @csrf
                        <input type="hidden" name="voted" value="true">
                        <input type="hidden" name="id" value= "{{$row->id}}">
                        <button type="submit" class="btn btn-primary">Vote</button>
                    </form>
                    @else
                        <p>You have already voted!</p>
                    @endif
                </div>
            </div>
            @endif
        @endforeach
    </div>

</x-app-layout>