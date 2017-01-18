<div class="login">
    {!! Form::open(['url' => 'submitlogin', 'id'=>'loginForm']) !!}
    <input type="text" id="username" name="username" placeholder="Enter username">
    <input type="password" id="password" name="password" placeholder="Enter password">
    <input type="submit" value="Login">
    {!! Form::close() !!}
</div>