/**
 * Created by john.inhog on 1/12/17.
 */
var app = require('express')();
var server =  require('http').Server(app);
var io = require('socket.io')(server);

//server.listen(8891);


server.listen(process.env.PORT || 3000, function(){
    console.log('listening on', server.address().port);
});


app.get('/', function(request, response) {
    response.render('/webview')
});

io.on('connection', function (socket) {

    console.log("client connected");


    socket.on('current-user',function(e){
        io.emit('current-user',e) ;
    });

    socket.on('chat message', function(msg){
        io.emit('chat message', msg);
    });

    socket.on('disconnect', function() {
    });

});