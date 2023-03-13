
<div class="content">
    <div class="mx-5 my-2">
        <div style="position: relative;display:flex; width: auto; height:60px; background-color:white">
            <input wire:model="searchTerm" type="text" class="form-control" name="search"
                placeholder="Search..." style="width: 95%; height:60px; border:none">
            <button type="submit"
                style="position: absolute;right: 10px;height:60px;width:50px;background-color:white;border:none;">
                <i class="fas fa-paper-plane"></i>
            </button>
        </div>
    </div>
     <div class="form-group my-2">
            <div class="question">
                @foreach($event as $row)
                @if($row->room_id == $roomId)

                <div class="bubble">
                    <!-- <h5 class="card-title">title</h5> -->
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
                        <form method="POST" action="/star">
                            @csrf
                            <input type="hidden" name="is_starred" value="true">
                            <input type="hidden" name="id" value="{{$row->id}}">
                            @if($row->is_starred == 1)
                            <button type="submit"
                                style="position: absolute;margin-top:-10px;right: 10px;height:50px;width:50px;background-color:inherit;border:none;">
                                <i class="fas fa-star" style=" color:#FFB743;"></i>
                            </button>
                            @else
                            <button type="submit"
                                style="position: absolute;margin-top:-10px;right: 10px;height:50px;width:50px;background-color:inherit;border:none;">
                                <i class="fas fa-star" style=" color:#fff;"></i>
                            </button>
                            @endif
                        </form>
                    </div>
                    @if($row->anonymous == 0)
                    <p class="name"> {{Auth::user()->name}} </p>
                    @else
                    <p class="name"> Anonymous </p>
                    @endif
                    <p class="text">{{$row->text}}</p>
                    <!-- <form method="POST" action="/delete_question"> -->
                        @csrf
                        <!-- <input type="hidden" name="id" value="{{$row->id}}"> -->
                        <button type="submit" class="btn btn-danger" onclick="window.location = '{{ route('delete_question', ['id'=>$row->id]) }}'">delete</button>
                    <!-- </form> -->
                </div>
                @endif
                @endforeach
                <button id="scroll-down-button" class="btn btn-primary">Scroll Down</button>
            </div>
        </div>
        
