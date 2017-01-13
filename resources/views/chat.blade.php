<style>
    html,body, .chat-container{
        width: 100%;
        height: 100%;

    }
    .chat-container{
        position: relative;

    }
        .left-container{
            width: 20%;
            height: 100%;
            float: left;
            background-color: #434753;
            position: relative;
        }
            .search{
                padding-top: 10px;
            }
            .user-list{
                height: 100%;
                height: 520px;
                padding: 15px 15px 5px 15px;

            }
                .user-list ul{
                    padding: 0;
                }
                    .user-list ul li{
                        list-style: none;
                        padding: 7px 0px;
                    }
                        .user-list ul li img{
                            background-color: #ffffff;
                            border-radius: 50%;
                            width: 50px;
                            height: 50px;
                        }
            
            .bottom-nav{
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 60px;
            }
                .bottom-nav ul{
                    display: block;
                    margin-bottom: 0px;
                    border-top: solid 1px #ffffff;
                    padding: 10px 0px 0px 10px;

                }
                    .bottom-nav ul li{
                        display: inline-block;
                        padding: 5px 15px 0px 15px;

                    }
                    .bottom-nav ul li img{

                        width: 30px ;
                        height: 30px;
                        background-color: #ffffff;
                    }
        
        .right-container{
            width: 80%;
            height: 100%;
            float: right;
        }



    
</style>

<div class="chat-container">
    <div class="left-container">
       <div class="search col-md-12">
           <input class="form-control" type="text" placeholder="Search">
       </div>
        <div class="col-md-12 user-list">
            <ul >
                <li>
                    <img>
                    <span>Name</span>
                </li>
                <li>
                    <img>
                    <span>Name</span>
                </li>
                <li>
                    <img>
                    <span>Name</span>
                </li>
                <li>
                    <img>
                    <span>Name</span>
                </li>
                <li>
                    <img>
                    <span>Name</span>
                </li>
                <li>
                    <img>
                    <span>Name</span>
                </li>
                <li>
                    <img>
                    <span>Name</span>
                </li>
                <li>
                    <img>
                    <span>Name</span>
                </li>
                <li>
                    <img>
                    <span>Name</span>
                </li>
                <li>
                    <img>
                    <span>Name</span>
                </li>
                <li>
                    <img>
                    <span>Name</span>
                </li>
                <li>
                    <img>
                    <span>Name</span>
                </li>
                <li>
                    <img>
                    <span>Name</span>
                </li>



            </ul>

        </div>
       <div class="bottom-nav">
           <ul>
               <li>
                   <img >
               </li>
               <li>
                   <img >
               </li>
               <li>
                   <img >
               </li>
               <li>
                   <img >
               </li>
           </ul>
       </div>
    </div>
    <div class="right-container">
      

    </div>
</div>

<script>

    var socket = io.connect('127.0.0.1:8890');
    $(document).ready(function(){
        $('.user-list').mCustomScrollbar({

        });

        $('form').submit(function(){
            socket.emit('chat message', $('#m').val());
            $('#m').val('');
            return false;
        });

        socket.on('chat message', function(msg){
            $('#messages').append($('<li>').text(msg));
        });
    });

</script>