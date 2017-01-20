@foreach($user_list_data as $key=>$user_list)
        <li data-id="{{ $data->id }}">
            <div class="search-card-data">
                <img>
                <span>{{ $data->name }}</span>
                <input type="submit" value="+" class="btn btn-primary">
            </div>
        </li>
@endforeach
