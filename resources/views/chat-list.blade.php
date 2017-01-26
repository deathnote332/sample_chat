@foreach($chatList as $key=>$list)
    <?php $user= \Illuminate\Foundation\Auth\User::find($list->others_id); ?>
    <li class="friend-profile  <?php echo $user->status ==1 ? 'active':'not-active';?>" data-chat_room="{{ $list->id }}">
        <div class="friend-image">
            <img src="../assets/images/background.jpg">
        </div>
        <div class="friend-data">
            <span>{{ $user->name }}</span>
            <?php $getCurrentMessage = \Illuminate\Support\Facades\DB::table('chat_room_data')->where('chat_room',$list->id)->orderBy('updated_at','desc')->first(); ?>
            <div class="friend-message">
                <span>{{ $getCurrentMessage->message }}</span>
            </div>
            <?php $time = App\Http\Controllers\ChatController::humanTiming(strtotime($getCurrentMessage->updated_at)); ?>
            <div class="friend-ago">{{ $time }}</div>
        </div>
    </li>
@endforeach
