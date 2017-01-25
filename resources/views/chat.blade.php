<style>
    html,body, .chat-container{
        width: 100%;
        height: 100%;
    }
    .chat-container{
        position: relative;
    }
        .inbox-container,.chat-list-container,.user-chat-container,.user-profile-container{
            position: relative;
            height: 100%;
            display: block;
            float: left;
        }

        .inbox-container{
            width: 15%;
            background-color: #1d232a;
            color: white;
            position: relative;
        }
            .inbox-header{
                padding: 20px;
            }
                .inbox-header span{
                    font-size: 16px;
                    font-weight: 900;
                }
                .inbox-header img{
                    width: 35px;
                    height: 35px;
                    border-radius: 50%;
                    position: relative;
                    left: 75px;
                }
        .inbox-list ul{
            padding: 0px;

        }
            .inbox-list ul li{
                list-style-type: none;
                padding: 10px 10px 10px 15px;
                position: relative;
                background-color: #343c45;
                margin: 5px 15px;
                border-radius: 5px;
            }
                .inbox-list ul li span:nth-child(2){
                    position: absolute;
                    right: 0px;
                    margin-right: 10px;
                }


        .chat-list-container{
            width: 25%;
            background-color: #242a31;
        }
            .search-chat{
                padding: 20px 30px;
                border-bottom: 1px solid #363d45;
            }
                .search-border{
                    background-color: #363d45;
                    padding: 5px 20px;
                    border-radius: 35px;
                    position: relative;
                    width: 100%;

                }
                    .search-border input[type='text']{
                        outline: none;
                        background-color: transparent;
                        padding-left: 25px;
                        border: none;
                        color:white;
                        background: url('../assets/images/search.png') no-repeat left/15px;
                    }
                    .search-border input[type='text'],.search-border input[type='text']:focus{
                        outline: none;
                        border-color: inherit;
                        -webkit-box-shadow: none;
                        box-shadow: none;
                    }
            .chat-list{
                height: 86%;
                margin: 0px;
                padding: 0px 10px;
            }
            .chat-list ul{
                padding: 0px;
                margin-top: 5px;
            }
                .chat-list ul li{
                    list-style-type: none;
                    width: 100%;
                    padding: 10px;
                    margin-bottom: 10px;
                    color:white;
                    background: #1d232a;
                    position: relative;
                    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                }
                    .friend-image{
                        width: 30%;
                    }
                    .chat-list ul li img{
                        height: 60px;
                        width: 60px;
                        border-radius: 50%;
                    }
                    .friend-data{
                        position: absolute;
                        right: 0px;
                        width:70%;
                        top: 20px;
                    }
                        .friend-name{
                            font-size: 15px;
                        }

                        .friend-message{
                            position: relative;
                            padding-top: 5px;
                            font-size: 11px;
                            width: 80%;
                        }
                        .friend-ago{
                            position: relative;
                            width: 20%;
                            right: 0px;
                            float: right;
                            font-size: 11px;
                            top: -15px;
                        }
                    .active:after,.not-active:after{
                        content: '';
                        position: absolute;
                        height: 10px;
                        width: 10px;
                        right: 15px;
                        top: 10px;
                        position: absolute;
                        border-radius: 50%;
                    }
                    .active:after{
                        background-color: green;
                    }
                    .not-active:after{
                        background-color: red;
                    }


        .user-chat-container{
            width: 40%;
            background-color: #eaecf0;
        }
            .user-chat-header{
                margin: 0;
                padding: 2px;
                border-bottom: 1px solid #363d45;
            }
                .user-chat-container{
                    display: block;
                }
                .user-chat-header ul{
                    display: block;
                    margin: 0;
                    padding: 0;
                }
                    .user-chat-header div{
                        display: inline-block;
                        list-style-type: none;
                        height: 80px;
                        text-align: center;
                        padding: 32px 0px 10px 5px;

                    }
                        .user-chat-header div:nth-child(1){
                            width: 65%;
                            text-align: left;
                            padding-left: 30px;
                        }
                        .user-chat-header div:nth-child(2),.user-chat-header div:nth-child(3),.user-chat-header div:nth-child(4){
                            width: 10%;

                            text-align: center;
                        }

                    .user-chat-header div img{
                        height: 30px;
                        width: 30px;
                    }
            .user-chat-body{
                height: 75%;

            }
            .user-chat-body ul{
                margin: 0;
                padding: 0;
            }
            .user-chat-body ul li{
                list-style-type: none;
                margin-bottom: 10px;
            }
                .left-user,.right-user{
                    display: block;
                }


                .left-user div,.right-user div{
                    display: inline-block;
                    vertical-align: top;
                }
                .right-user{
                    direction: rtl;
                    text-align: right;
                }

                .right-user .user-message{
                   background-color: #0083fe;
                    color:white;
                }

                .left-user{
                    padding-right: 60px;
                }

                .user-image{
                    padding: 10px;
                }
                .user-image img{
                    height: 40px;
                    width: 40px;
                    border-radius: 50%;
                }

                .user-message{
                    padding: 10px;
                    background-color: white;
                    max-width: 85%;
                    border-radius: 5px;
                    position: relative;
                    top: 10px;

                }

                .left-triange:after,.right-triangle:after{
                    content: "";
                    position: absolute;
                    border-top: 5px solid transparent;
                    border-bottom: 5px solid transparent;

                }

                .left-triange:after{
                    border-right: 10px solid white;
                    left: -10px;
                    top: 13px;
                    width: 0;
                    height: 0;
                }

                .right-triangle:after{
                    border-left: 10px solid #0083fe;
                    right: -10px;
                    top: 13px;
                    width: 0;
                    height: 0;
                }

                .user-message span{
                    word-wrap: break-word;
                }

            .user-chat-footer{
                position: absolute;
                bottom:0px;
                display: block;
                width: 100%;
                padding: 0px 0px 10px 0px;
                border-top: 1px solid #363d45;

            }
                .user-chat-footer div{
                    display: inline-block;
                    text-align: center;
                }
                    .user-chat-footer div:nth-child(1),.user-chat-footer div:nth-child(3),.user-chat-footer div:nth-child(4){
                        width: 10%;
                        position: relative;
                        top: -15px;
                    }

                    .user-chat-footer div i:hover{
                        color: #0083fe;
                        cursor: pointer;
                    }
                    .chat-area{
                        width: 65%;
                        top: 15px;
                        position: relative;
                    }

                    .chat-area textarea{
                        outline: none;
                        background-color: transparent;
                        padding-top: 10px;
                        border: none;
                        color:black;
                        resize: none;

                     }
                    .chat-area textarea,.chat-area textarea:focus{
                        outline: none;
                        border-color: inherit;
                        -webkit-box-shadow: none;
                        box-shadow: none;
                    }

        .user-profile-container{
            width: 20%;

        }
            .user-profile-header{
                padding: 32px 15px;
                border-bottom: 1px solid #363d45;
            }
            .user-profile-header img{
                width: 30px;
                height: 30px;

            }
            .user-profile-image{
                padding: 30px 0px;
                border-bottom: 1px solid #363d45;
                text-align: center;
            }
            .user-profile-image img{
                width: 120px;
                height: 120px;
                border-radius: 50%;
            }
            .user-profile-name{
                padding-top: 10px;
                font-size: 18px;
                font-weight: 700;
            }
            .user-profile-data{
                height: 50%;
            }
            .user-profile-data ul{
                padding: 10px 0px;
             }
            .user-profile-data ul li{
                list-style-type: none;
                padding: 10px 15px;
                border-bottom: 1px solid #363d45;

            }
            .user-profile-data ul li:last-child{
                border-bottom: none;
            }
            .user-profile-data ul span{
                float: right;
            }


    .mCSB_inside > .mCSB_container {
        margin-right: 0px;
    }

</style>
<input type="hidden" id="current_user" value="{{ Auth::user()->id }}">
<div class="chat-container">
   <div class="inbox-container">
       <div class="inbox-header cold-md-12">
           <span>Inbox</span>
           <img src="../assets/images/background.jpg">
       </div>
       <div class="inbox-list">
           <ul>
               <li>
                   <span>All Messages</span>
                   <span>21</span>
               </li>
               <li>
                   <span>Unread</span>
                   <span>29</span>
               </li>
               <li>
                   <span>Important</span>
                   <span>6</span>
               </li>
               <li>
                   <span>Request</span>
                   <span>6</span>
               </li>
           </ul>
       </div>
   </div>
   <div class="chat-list-container">
       <div class="search-chat col-md-12">
            <div class="search-border">
                <input type="text" class="form-control" id="chat-search" placeholder="Search">
            </div>
       </div>
       <div class="chat-list col-md-12">
           <ul class="chat-list-data">
<!--               <li class="friend-profile  not-active">-->
<!--                   <div class="friend-image">-->
<!--                       <img src="../assets/images/background.jpg">-->
<!--                   </div>-->
<!--                   <div class="friend-data">-->
<!--                       <span>Paul Thompson</span>-->
<!--                       <div class="friend-message">-->
<!--                           <span>Thanks again you have been..</span>-->
<!--                       </div>-->
<!--                       <div class="friend-ago">5min</div>-->
<!--                   </div>-->
<!--               </li>-->
           </ul>
       </div>
   </div>
   <div class="user-chat-container">
       <div class="user-chat-header col-md-12">
           <div>
               <span>Matth Thompson is typing...</span>
           </div>
           <div>
               <i class="fa fa-star fa-lg"></i>
           </div>
           <div>
               <i class="fa fa-phone fa-lg"></i>
           </div>
           <div>
               <i class="fa fa-video-camera fa-lg"></i>
           </div>
       </div>
       <div class="user-chat-body col-md-12">
           <ul>
<!--               <li>-->
<!--                   <div class="left-user">-->
<!--                       <div class="user-image">-->
<!--                           <img src="../assets/images/background.jpg">-->
<!--                       </div>-->
<!--                       <div class="user-message left-triange">-->
<!--                           <span> asdasdasdasdasdasd</span>-->
<!---->
<!--                       </div>-->
<!--                   </div>-->
<!--               </li>-->
<!---->
<!--               <li>-->
<!--                   <div class="right-user">-->
<!--                       <div class="user-image">-->
<!--                           <img src="../assets/images/background.jpg">-->
<!--                       </div>-->
<!--                       <div class="user-message right-triangle">-->
<!--                           <span> asdasdasdasdasdasd</span>-->
<!--                       </div>-->
<!--                   </div>-->
<!--               </li>-->
           </ul>

       </div>
       <div class="user-chat-footer col-md-12">
           <div>
               <i class="fa fa-paperclip fa-lg"></i>
           </div>
           <div class="chat-area">
               <textarea id="chat_area" rows="2" class="form-control" placeholder="Type your message"></textarea>
           </div>
           <div class="chat-action">
               <i class="fa fa-smile-o fa-lg"></i>
           </div>
           <div>
               <i class="fa fa-paper-plane fa-lg"></i>
           </div>
       </div>
   </div>
    <div class="user-profile-container">
        <div class="user-profile-header">
            <i class="fa fa-bell fa-lg"></i>

        </div>
        <div class="user-profile-image">
            <img src="../assets/images/background.jpg">
            <div class="user-profile-name">Matt Thompson</div>
            <div class="user-profile-address">USA</div>
        </div>
        <div class="user-profile-data">
            <ul>
                <li>Nickname: <span>Polds</span></li>
                <li>Tel:<span>11111</span></li>
                <li>Date of Birth:<span>July 22,1995</span></li>
                <li>Language <span>Taglish</span></li>
            </ul>
        </div>
    </div>
</div>
<div id="emojiContainer"></div>

<script>
    var socket = io.connect('192.168.1.193:8891');
    $(document).ready(function(){
        var BASEURL = $('#baseURL').val();

        $('.active-list').mCustomScrollbar();
        $('.friend-list').mCustomScrollbar();

        loadChatList();


        runEmoji()

        $('.user-friend-list').hide();

        $('#chat-search').on('keyup',function(){

//            var that = this, $allListElements = $('.friend-list-data > li');
//            var $matchingListElements = $allListElements.filter(function(i, li){
//                var listItemText = $(li).text().toUpperCase(),
//                    searchText = that.value.toUpperCase();
//                return ~listItemText.indexOf(searchText);
//            });
//            $allListElements.hide();

//            $matchingListElements.show();
            var g = $(this).val().toLowerCase();

            $('.friend-data').each(function() {
                var s = $(this).children('span').text().toLowerCase();
                $(this).closest('.friend-profile')[ s.indexOf(g) !== -1 ? 'show' : 'hide' ]();
            });

        });


        $('#search_user_list').on('keyup',function(){

            if($(this).val()==null && $(this).val()==''){
                $('.user-friend-list').hide();
                alert(this)
            }
        });


        socket.emit('current-user',{ user_active: true });
        runEmoji()

        $('.fa-paper-plane').on('click',function(){

            var input =  $('#chat_area').val();
            if(input!=''){
                socket.emit('chat message',{user_id:$('#current_user').val(),msg:input});
                $('.chat-area').val('');
                return false;
            }else{
                return false;
            }
        });

        socket.on('chat message', function(data){



            if(data.user_id==2){

                $('.user-chat-body ul').append($('<li>' +
                    '<div class="right-user">' +
                        '<div class="user-image">' +
                            '<img src="../assets/images/background.jpg">' +
                        '</div>' +
                        '<div class="user-message right-triangle">'+ data.msg +

                        '</div>' +
                    '</div>' +
                '</li>'))


                $(".user-chat-body").mCustomScrollbar({
                    //your options...
                }).mCustomScrollbar("scrollTo","bottom",{scrollInertia:0});

            }else{

                $('.user-chat-body ul').append($('<li>' +
                    '<div class="left-user">' +
                        '<div class="user-image">' +
                            '<img src="../assets/images/background.jpg">' +
                        '</div>' +
                        '<div class="user-message left-triange">' +  data.msg +

                        '</div>' +
                    '</div>' +
                '</li>'))
                $(".user-chat-body").mCustomScrollbar({
                    //your options...
                }).mCustomScrollbar("scrollTo","bottom",{scrollInertia:0});
                runEmoji();
            }
        });

        socket.on('current-user',function(data){

        });



    });


    function runEmoji(){
        var BASEURL = $('#baseURL').val();
        emojify.setConfig({

            emojify_tag_type : 'div',           // Only run emojify.js on this element
            only_crawl_id    : null,            // Use to restrict where emojify.js applies
            img_dir          : BASEURL+'/assets/emoji',  // Directory for emoji images
            ignored_tags     : {                // Ignore the following tags
                'SCRIPT'  : 1,
                'TEXTAREA': 1,
                'A'       : 1,
                'PRE'     : 1,
                'CODE'    : 1
            }
        });

        emojify.run();
    }

    function loadFriendList(){

        var BASEURL = $('#baseURL').val();
        $.ajax({
            url: BASEURL + '/getFriendList',
            type: 'post',
            data:{
                '_token': $('meta[name="csrf_token"]').attr('content')
            },
            success:function(data){
                $('.active-list').html(data)
            }
        });

    }

//    function loadSearchList(){
//        var BASEURL = $('#baseURL').val();
//        $.ajax({
//            url: BASEURL + '/getFriendList',
//            type: 'get',
//            data:{
//                '_token': $('meta[name="csrf_token"]').attr('content')
//            },
//            success:function(data){
//                $('.user-friend-list').html(data)
//
//            }
//        });
//    }

    function loadChatList(){
        var BASEURL = $('#baseURL').val();
        $.ajax({
            url: BASEURL + '/ChatList',
            type: 'post',
            data:{
                '_token': $('meta[name="csrf_token"]').attr('content')

            },
            success:function(data){
                $('.chat-list-data').html(data)

            }
        });
    }



</script>