@foreach($users as $key=>$user_list)
    @if( Auth::user()->id!=$user_list->id)
    <li data-id="{{ $user_list->id }}">
        <div class="search-card-data">
            <img>
            <span>{{ $user_list->name }}</span>
            <span>Status: Friends</span>
            <input type="submit" value="+" class="btn btn-primary">
        </div>
    </li>
    @endif
@endforeach
