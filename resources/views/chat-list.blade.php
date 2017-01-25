@foreach($chatList as $key=>$list)
    <?php $user= \Illuminate\Foundation\Auth\User::find($list->others_id); ?>
    <li class="friend-profile  <?php echo $user->status ==1 ? 'active':'not-active';?>" data-chat_room="{{ $list->chat_room }}">
        <div class="friend-image">
            <img src="../assets/images/background.jpg">
        </div>
        <div class="friend-data">
            <span>{{ $user->name }}</span>
            <div class="friend-message">
                <span>Thanks again you have been..</span>
            </div>
            <div class="friend-ago">5min</div>
        </div>
    </li>
@endforeach
