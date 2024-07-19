
<style>
    *{
        margin:0; padding:0;
        box-sizing: border-box;
        text-transform: capitalize;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-weight:normal;

    }

    .heading{
        color:#444;
        font-size:40px;
        text-align:center;
        padding:10px;
    }

    .container{
        display:grid;
        grid-template-columns: 2fr 1fr;
        gap:15px;
        align-items: flex-start;
        margin-top:20px;
    }

    .container .main-video{
        background:#fff;
        border-radius:5px;
        padding:10px;
    }

    .container .main-video video{
        width:100%;
        border-radius:5px;
    }

    .container .main-video .title{
        color:#333;
        font-size:23px;
        padding-top:15px;
        padding-top:15px;
    }

    .container .video-list{
        background:#fff;
        border-radius:5px;
        height:520px;
        overflow-y: scroll;
    }

    .container .video-list::-webkit-scrollbar{
        width:7px;
    }

    .container .video-list::-webkit-scrollbar-track{
        background:#ccc;
        border-radius:50px;
    }

    .container .video-list .vid video{
        width:100px;
        border-radius:5px;
    }

    .container .video-list .vid{
        display:flex;
        align-items:center;
        gap:15px;
        background:#f7f7f7;
        border-radius:5px;
        margin:10px;
        padding:10px;
        border:1px solid rgba(0,0,0,.1);
        cursor:pointer;
    }

    .container .video-list .vid:hover{
        background:#eee;

    }

    .container .video-list .vid-active{
        background:#7c4a69;
    }
    .container .video-list .vid.active .title{
        color:#7c4a69;
    }

    .container .video-list .vid .title{
        color:#4e0742;
        font-size:17px;
    }

    @media (max-width:991px){
       container{
           grid-template-columns:1.5fr fr;
           padding:10px;
       }

    }

    @media (max-width:768px){
       container{
           grid-template-columns:1fr ;
       }

    }



</style>
<div class="container">
    <div class="main-video">
        <div class="video">
            <video src="../uploads/system/kidsvideo/1.mp4" controls muted autoplay></video>
            <h3 class="title">Five little ducks</h3>
        </div>
    </div>

    <div class="video-list">
        <div class="vid active">
            <video src="../uploads/system/kidsvideo/2.mp4" muted></video>
            <h3 class="title"> School Bus</h3>
        </div>

        <div class="vid">
            <video src="../uploads/system/kidsvideo/3.mp4" muted></video>
            <h3 class="title"> Clap Your Hands</h3>
        </div>

        <div class="vid">
            <video src="../uploads/system/kidsvideo/4.mp4" muted></video>
            <h3 class="title"> Little Rains</h3>
        </div>

        <div class="vid">
            <video src="../uploads/system/kidsvideo/5.mp4" muted></video>
            <h3 class="title">Progress report</h3>
        </div>

        <div class="vid">
            <video src="../uploads/system/kidsvideo/6.mp4" muted></video>
            <h3 class="title">Jhony has an old train</h3>
        </div>

        <div class="vid">
            <video src="../uploads/system/kidsvideo/7.mp4" muted></video>
            <h3 class="title">Chocolate Birthday cake</h3>
        </div>

        <div class="vid">
            <video src="../uploads/system/kidsvideo/8.mp4" muted></video>
            <h3 class="title">Six little ducks</h3>
        </div>
    </div>
    <script>

    let listVideo = document.querySelectorAll('.video-list .vid');
    let mainVideo= document.querySelector('.main-video video');
    let title = document.querySelector('.main-video .title');

    listVideo.forEach(video =>{
        video.onclick = () =>{
            listVideo.forEach(vid => vid.classList.remove('active'));
            video.classList.add('active');
            if(video.classList.contains('active')){
                let src = video.children[0].getAttribute('src');
                mainVideo.src = src;
                let text = video.children[1].innerHTML;
                title.innerHTML = text;

            };
        };
    });

</script>
</div>



