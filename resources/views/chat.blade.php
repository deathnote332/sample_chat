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
                z-index: 1000;
            }
            .user-list{
                height: 100%;
                padding: 125px 15px 5px 15px;
                position: relative;
                bottom: 110px;
            }
                .user-list ul{
                    padding: 0;
                }
                    .user-list ul li{
                        list-style: none;
                        padding: 7px 0px;
                    }li.card-board{

                        background: gray;
                        margin-bottom: 5px;
                     }li.card-board:hover{
                        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                        background: darkgray;
                     }
                     .card-content{
                        padding: 0px 10px 0px 10px;
                        position: relative;
                     }
                        .user-list ul li img{
                            background-color: #ffffff;
                            border-radius: 50%;
                            width: 50px;
                            height: 50px;
                        }
                        .user-name{
                            color: white;
                            font-size: 13px;
                            font-weight: lighter;
                            position: relative;
                            left: 10px;
                            top: -8px;
                        }.active{
                             width: 10px;
                             height: 10px;
                             background-color: green;
                             position: absolute;
                             left: 72px;
                             border-radius: 50%;
                             /* display: block; */
                             top: 30px;
                        }.not-active{
                              width: 10px;
                              height: 10px;
                              background-color: red;
                              position: absolute;
                              left: 72px;
                              border-radius: 50%;
                              /* display: block; */
                              top: 30px;
                        }.status{
                               position: absolute;
                               top: 28px;
                               left: 85px;
                               font-size: 11px;
                               font-style: italic;
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
            position: relative;
        }
            .current-user{
                width: 100%;
                padding: 20px;
                border-bottom: 1px solid #434753;

            }
                .current-user img{
                    width: 70px;
                    height: 70px;
                    border-radius: 50%;
                }
            .chat-body{
                height: 100%;
                padding: 265px 15px 5px 15px;
                position: relative;
                bottom: 260px;
            }
                .chat-body ul{
                    padding: 0;
                }
                .chat-body ul li{
                    list-style: none;
                    padding: 10px 0px;
                }
                    .chat-body ul li img{
                        height: 40px;
                        width: 40px;
                        border-radius: 50%;
                    }

                    .right-user{
                        text-align: right;
                    }

            .chat-input-container{
                position: absolute;
                bottom: 0;
                height: 150px;
                width: 100%;
                border-top: 1px solid #434753;
            }
                .chat-input{
                    padding: 20px 20px 0px 30px;
                }
                    .chat-input textarea{
                        resize: none;
                    }
                    .chat-input input[type="button"]{
                        margin-top: 12px;
                        margin-left: 20px;
                    }


    .mCSB_inside > .mCSB_container {
        margin-right: 20px;
    }

    
</style>

<div class="chat-container">
    <div class="left-container">
       <div class="search col-md-12">
           <input id="search_user" class="form-control" type="text" placeholder="Search">
       </div>
        <div class="col-md-12 user-list">
            <ul class="active-list">

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
        <div class="current-user">
            <img src="../assets/images/background.jpg">
            <span style="font-size: 18px;font-weight: 900"  id="current_user" data-user_id="{{ Auth::user()->id }}" data-user_name="{{ Auth()->user()->name }}">{{ Auth::user()->name }}</span>
        </div>
        <div class="chat-body col-md-12">
            <ul>
<!--                <li class="left-user">-->
<!--                    <img src="../assets/images/background.jpg">-->
<!--                    <span>{{ Auth()->user()->name }}</span>-->
<!--                    <div></div>-->
<!--                </li>-->
<!--                <li class="right-user" style="text-align: right">-->
<!--                   asdasd-->
<!--                </li>-->
            </ul>
        </div>
        <div class="chat-input-container">
            <div class="col-md-12 chat-input">
                <div class="col-md-10" >
                    <div class="row">
                        <textarea class="form-control chat-area" placeholder="Enter Message.." rows="3"></textarea>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="button" class="btn btn-primary btn-lg send-chat" value="Send">
                </div>
            </div>

        </div>
    </div>
</div>


<script>
    var socket = io.connect('192.168.1.193:8891');
    $(document).ready(function(){
        var BASEURL = $('#baseURL').val();
        $('.active-list').mCustomScrollbar();



        $('#search_user').on('keyup',function(){

            var that = this, $allListElements = $('.active-list > li');
            var $matchingListElements = $allListElements.filter(function(i, li){
                var listItemText = $(li).text().toUpperCase(),
                    searchText = that.value.toUpperCase();
                return ~listItemText.indexOf(searchText);
            });
            $allListElements.hide();
            $matchingListElements.show();

        });

        loadActive();



        $('body').delegate('.card-board','click',function(){
            $('.current-user span').text($(this).children('.card-content').children('.user-name').text())
            //load chat data
        })

        socket.emit('current-user',{ user_active: true });

        $('.send-chat').on('click',function(){
            var input =  $('.chat-area').val();
            if(input!=''){
                socket.emit('chat message',{user_id:$('#current_user').data('user_id'),msg:$('.chat-area').val(),user_name:$('#current_user').data('user_name')});
                $('.chat-area').val('');
                return false;
            }else{
                return false;
            }
        });

        socket.on('chat message', function(data){

            if(data.user_id==$('#current_user').data('user_id')){
                $('.chat-body ul').append($('<li class="right-user">').text(data.msg));
                $(".chat-body").mCustomScrollbar({
                    //your options...
                }).mCustomScrollbar("scrollTo","bottom",{scrollInertia:0});

            }else{
                $('.chat-body ul').append($('<li><img src="../assets/images/background.jpg"><span>'+data.user_name+'</span><div>'+ data.msg +'</div></li>'));
                $(".chat-body").mCustomScrollbar({
                    //your options...
                }).mCustomScrollbar("scrollTo","bottom",{scrollInertia:0});

            }



        });

        socket.on('current-user',function(data){
         if(data.user_active){
             loadActive();
         }
        });



    });

    function loadActive(){
        var BASEURL = $('#baseURL').val();
        $.ajax({
            url: BASEURL + '/activeUser',
            type: 'get',
            data:{
                '_token': $('meta[name="csrf_token"]').attr('content')
            },
            success:function(data){
                $('.active-list').html(data)

            }
        });
    }

    function loadMessages(){

    }


</script>