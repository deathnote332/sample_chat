@foreach($users as $key=>$user)
@if($user->id != Auth::user()->id)
<li class="card-board" data-id="{{ $user->id }}">
    <div class="card-content">
        <img src="../assets/images/background.jpg">
        <span class="user-name">{{ $user->name }}</span>
        @if($user->status==1)
        <div class="active"></div>
        <span class="status">online</span>
        @else
        <div class="not-active"></div>
        <span class="status">offline</span>
        @endif

    </div>
</li>
@endif
<!--                <li class="card-board">-->
<!--                    <div class="card-content">-->
<!--                        <img src="../assets/images/background.jpg">-->
<!--                        <span class="user-name">Legal Provider</span>-->
<!--                        <div class="not-active"></div>-->
<!--                        <span class="status">offline</span>-->
<!--                    </div>-->
<!--                </li>-->
@endforeach