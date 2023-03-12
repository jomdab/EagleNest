
<div class="content">
            <div class="question">
                @foreach($this->event as $row)
                @if($row->room_id == $roomId)
                <div class="bubble">
                    <div class="bubble-content">
                        <div style="display:flex;align-items:center;">
                            <p class="vote">{{ $row->vote }} VOTE</p>
                            @if($loop->iteration ==1)
                            <i class="fa fa-crown"
                                style="margin-left:10px;font-size:20px;color:#FFB743;text-shadow: 0 0 2px #000;"></i>
                            @endif
                            @if($loop->iteration ==2)
                            <i class="fa fa-crown"
                                style="margin-left:10px;font-size:20px;color:#C0C0C0;text-shadow: 0 0 3px #000;"></i>
                            @endif
                            @if($loop->iteration ==3)
                            <i class="fa fa-crown"
                                style="margin-left:10px;font-size:20px;color:#B87333;text-shadow: 0 0 3px #000;"></i>
                            @endif
                        </div>
                        @if($row->anonymous == 0)
                        <p class="name"> {{Auth::user()->name}} </p>
                        @else
                        <p class="name"> Anonymous </p>
                        @endif
                        <p class="text">{{$row->text}}</p>

                        @php($already_voted = 'false')
                        @foreach($vote as $v)
                        @if($v->user_id == Auth::user()->id && $v->question_id ==$row->id)
                        <!-- <form method="POST" action="/delete_vote" class="votebtn"> -->
                            @csrf
                            <!-- <input type="hidden" name="id" value="{{$row->id}}">
                            <input type="hidden" name="vote_id" value="{{$v->id}}"> -->
                            <button type="submit" class="btn btn-primary" onclick="window.location = '{{ route('delete_vote', ['id'=>$row->id , 'vote_id' => $v->id ]) }}'">Unvote</button>
                        <!-- </form> -->
                        @php($already_voted = 'true')
                        @endif
                        @endforeach
                        @if($already_voted == 'false')
                        <!-- <form method="POST" action="/increase_vote"> -->
                            @csrf
                            <!-- <input type="hidden" name="id" value="{{$row->id}}"> -->
                            <button type="submit" class="btn btn-secondary" onclick="window.location = '{{ route('increase_vote', ['id'=>$row->id]) }}'">Vote</button>
                        <!-- </form> -->
                        @endif
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <div class="addquestion">
                <form action="/submit-question/{{$roomId}}" method="post">
                    <div class="bar">
                        <div class="fa fa-user-circle"></div>
                        <div class="bar-name">{{Auth::user()->name}}</div>
                        <div class="bar-anonymous">
                            <div>
                                <label class="toggle">
                                    <input type="checkbox" name="anonymous" value="1">ANONYMOUS
                                    <span class="slider"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    @csrf
                    @error('question')
                    <span class="text-danger my-2">{{$message}}</span>
                    @enderror
                    <div class="form-group my-2">
                    </div>
                    <div class="askbox">
                        <div class="desc">Ask some questions.</div>
                        <div style="position: relative;display:flex; width: auto; height:60px; background-color:white">
                            <input wire:model='searchTerm' type="text" class="form-control" name="question"
                                placeholder="Ask your question here..." style="width: 95%; height:60px; border:none">
                            <button type="submit"
                                style="position: absolute;right: 10px;height:60px;width:50px;background-color:white;border:none;">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
