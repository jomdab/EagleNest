<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<x-app-layout>
<!-- submit question bar -->
<div class="container mx-auto my-3 bg-white">
    <div class="container mt-5 ">
      <div class="row">
        <div class="col-12">
          <form action="/submit-question/{{$roomId}}" method="post">
            @csrf
            @error('question')
              <span class="text-danger my-2">{{$message}}</span>
            @enderror
            <div class="form-group my-2">
              <div>
                <label class="checkbox-inline">
                  <input type="checkbox" name="anonymous" value="1"> anonymous
                </label>
              </div>
            </div>
            <div class="input-group">
              <input type="text" class="form-control" name="question" placeholder="Ask your question here...">
              <div class="input-group-append" style="display: flex;">
                <button class="btn btn-primary mx-2" type="submit" style="width: 100%;">
                  <i class="fas fa-paper-plane"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>

    <div>
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
                    @php($already_voted = 'false')
                    @foreach($vote as $v)
                        @if($v->user_id == Auth::user()->id && $v->question_id ==$row->id)
                            <form method="POST" action="/delete_vote">
                                @csrf
                                <input type="hidden" name="id" value= "{{$row->id}}">
                                <input type="hidden" name="vote_id" value= "{{$v->id}}">
                                <button type="submit" class="btn btn-primary">Vote</button>
                            </form>
                            <p>You have already voted!</p>
                            @php($already_voted = 'true')
                        @endif
                    @endforeach
                    @if($already_voted == 'false')
                        <form method="POST" action="/increase_vote">
                            @csrf
                            <input type="hidden" name="id" value= "{{$row->id}}">
                            <button type="submit" class="btn btn-secondary">Vote</button>
                        </form>
                    @endif
                </div>
            </div>
            @endif
        @endforeach
    </div>

</x-app-layout>