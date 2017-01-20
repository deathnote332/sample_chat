@foreach($chat_room_data as $key=>$chat)

<li class="card-board" data-chat_room_id="{{ $chat->id }}">
    <div class="card-content">
        <img src="../assets/images/background.jpg">
        <?php  $user = json_decode($chat->user); ?>
        @foreach($user as $key=>$val)
         <span class="user-name">
         <?php $user = \App\User::where('id',$val->user_id)->first()  ?>
            {{ $user->name  }}
         </span>
        @if($user->status==1)
        <div class="active"></div>
        <span class="status">online</span>
        @else
        <div class="not-active"></div>
        <span class="status">offline</span>
        @endif
        @endforeach
    </div>
</li>


<!--                <li class="card-board">-->
<!--                    <div class="card-content">-->
<!--                        <img src="../assets/images/background.jpg">-->
<!--                        <span class="user-name">Legal Provider</span>-->
<!--                        <div class="not-active"></div>-->
<!--                        <span class="status">offline</span>-->
<!--                    </div>-->
<!--                </li>-->
@endforeach