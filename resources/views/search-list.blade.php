@foreach($users as $key=>$user_list)
    <li data-id="{{ $user_list->id }}">
        <div class="search-card-data">
            <img>
            <span>{{ $user_list->name }}</span>
            <input type="submit" value="+" class="btn btn-primary">
        </div>
    </li>
@endforeach
