
@foreach($chatList as $key=>$list)

    @if($list['chat_type']==1)
        @foreach ($list['users'] as $user_id)
            @if($user_id!=Auth::user()->id)
                <?php $user = \Illuminate\Foundation\Auth\User::find($user_id) ?>
            @endif
        @endforeach

        <li class="friend-profile  <?php echo $user->status ==1 ? 'active':'not-active';?>" data-chat_room="{{ $list['chat_room_id'] }}">
            <div class="friend-image">
                <img src="../assets/images/background.jpg">
            </div>
            <div class="friend-data">
                <span>{{ $user->name }}</span>
                <?php $getCurrentMessage = \Illuminate\Support\Facades\DB::table('chat_room_data')->where('chat_room_id',$list['chat_room_id'])->orderBy('updated_at','desc')->first(); ?>
                <div class="friend-message">
                    {{ $getCurrentMessage->message }}
                </div>
                <div class="friend-ago">{{ App\Http\Controllers\ChatController::humanTiming(strtotime($getCurrentMessage->updated_at)) }}</div>
            </div>
        </li>
    @else
        <li class="friend-profile" data-chat_room="{{ $list['chat_room_id'] }}">
            <div class="friend-image">
                <img src="../assets/images/background.jpg">
            </div>
            <div class="friend-data">
                <span>
                    @foreach ($list['users'] as $user_id)
                       @if($user_id!=Auth::user()->id)
                            <?php $user = \Illuminate\Foundation\Auth\User::find($user_id) ?>
                            {{ $user->name }},
                        @endif

                    @endforeach
                </span>
                <?php $getCurrentMessage = \Illuminate\Support\Facades\DB::table('chat_room_data')->where('chat_room_id',$list['chat_room_id'])->orderBy('updated_at','desc')->first(); ?>

                <div class="friend-message">
                    {{ $getCurrentMessage->message }}
                </div>
                <div class="friend-ago">{{ App\Http\Controllers\ChatController::humanTiming(strtotime($getCurrentMessage->updated_at)) }}</div>
            </div>
        </li>
    @endif

@endforeach
