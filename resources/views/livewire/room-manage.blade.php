<div class="content">
    <div class="title">
        <h1>Q&A Event</h1>
    </div>
    <div class="mid">
        <div class="search">
            <form>
                <input wire:model="searchTerm" type="text" name="q" placeholder="Search...">
                <button type="submit" style="display:none;">
                </button>
            </form>
        </div>
        <button onclick="openModal()" class="btn">Create New Event</button>

        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <form action="/rooms" method="POST">
                    @csrf
                    <label for="input">Event Name:</label>
                    <input type="text" id="name" name="name" required>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    <div class="eventlist">
        <div class="bar">
            <ul>
                <li>Event Name</li>
                <li>Status</li>
            </ul>
        </div>
        <div class="list">
            @foreach($rooms as $room)
            <div class="list-element">
                <h4 class="element-name">{{$room->name}}</h4>
                @if($room->status == 'wait')
                <a class="element-status btn-primary" href="/{{$room->room_id}}/admin">Start</a>
                @elseif($room->status == 'progress')
                <a class="element-status btn-primary "href="/{{$room->room_id}}/admin">Resume</a>
                @elseif($room->status == 'finished')
                <a class="element-status btn-primary">See Result</a>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</div>