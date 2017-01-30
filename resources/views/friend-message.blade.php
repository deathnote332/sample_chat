<ul class="friend-messages" data-chat_room_id="{{ $chat_room_id }}">
@foreach ($getMessage as $key=> $val)
    <li>
       <div class="<?php echo $val->_from == Auth::user()->id ? 'right-user':'left-user'; ?>">
           @if($val->_from == Auth::user()->id)
           <div class="user-message <?php echo $val->_from == Auth::user()->id ? 'right-triangle':'left-triange'; ?>">
               {{ $val->message }}
           </div>
           <div class="user-image">
               <img src="../assets/images/background.jpg">
           </div>
           @else
           <div class="user-image">
               <img src="../assets/images/background.jpg">
           </div>
           <div class="user-message <?php echo $val->_from == Auth::user()->id ? 'right-triangle':'left-triange'; ?>">
               {{ $val->message }}
           </div>
           <?php $user = \Illuminate\Foundation\Auth\User::find($val->_from) ?>
           <div class="from"> {{ $user->name }} </div>
           @endif
       </div>
    </li>
@endforeach
</ul>

<!--   <li>-->
<!--       <div class="right-user">-->
<!--           <div class="user-image">-->
<!--               <img src="../assets/images/background.jpg">-->
<!--           </div>-->
<!--           <div class="user-message right-triangle">-->
<!--               <span> asdasdasdasdasdasd</span>-->
<!--           </div>-->
<!--       </div>-->
<!--   </li>-->
