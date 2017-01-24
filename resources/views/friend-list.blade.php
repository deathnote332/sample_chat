@foreach($friend_list_data as $key=>$friend_list)
    <?php  $friends = json_decode($friend_list->friend_id); ?>
    @foreach($friends as $key=>$val)
        <li class="card-board">
            <div class="card-content">
                <img src="../assets/images/background.jpg">
                 <span class="user-name">
                 <?php $user = \App\User::where('id',$val->id)->first()  ?>
                    {{ $user->name  }}
                 </span>
                @if($user->status==1)
                <div class="active"></div>
                <span class="status">online</span>
                @else
                <div class="not-active"></div>
                <span class="status">offline</span>
                @endif
            </div>
        </li>
    @endforeach

<!--                <li class="card-board">-->
<!--                    <div class="card-content">-->
<!--                        <img src="../assets/images/background.jpg">-->
<!--                        <span class="user-name">Legal Provider</span>-->
<!--                        <div class="not-active"></div>-->
<!--                        <span class="status">offline</span>-->
<!--                    </div>-->
<!--                </li>-->
@endforeach