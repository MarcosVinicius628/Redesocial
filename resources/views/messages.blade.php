@extends('layouts.messages-layout')
@section('content')
        <div id="message">
            <div class="message_container">
                <div class="persons">
                    <div class="account_name">
                        <p>Zineb_essoussi</p>
                        <p class="search">
                            <img src="/Assets/imagem/edit.png" alt="edit">
                        </p>
                    </div>
                    <div class="account_message">
                        <div class="desc">
                            <p>Messages</p>
                            <p><a href="#">3 requests</a></p>
                        </div>
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="/Assets/imagem/profile_img.jpg" alt="">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                </div>
                            </div>
                        </div>
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="/Assets/imagem/profile_img.jpg" alt="">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                </div>
                            </div>

                        </div>
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="/Assets/imagem/profile_img.jpg" alt="">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                </div>
                            </div>

                        </div>
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="/Assets/imagem/profile_img.jpg" alt="">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                </div>
                            </div>

                        </div>
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="/Assets/imagem/profile_img.jpg" alt="">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                </div>
                            </div>
                        </div>
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="/Assets/imagem/profile_img.jpg" alt="">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                </div>
                            </div>

                        </div>
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="/Assets/imagem/profile_img.jpg" alt="">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                </div>
                            </div>

                        </div>
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="/Assets/imagem/profile_img.jpg" alt="">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="message">
                    <div class="options">
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="/Assets/imagem/profile_img.jpg" alt="">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                </div>
                            </div>
                        </div>
                        <div class="other">
                            <a href="#">
                                <img src="/Assets/imagem/telephone.png" alt="call">
                            </a>
                            <a href="#">
                                <img src="/Assets/imagem/video_call.png" alt="video call">
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="my_message">
                            <p class="p_message">hello how are you?</p>
                        </div>
                        <div class="response_message">
                            <p class="p_message">hi! i'm fine and you?</p>
                        </div>
                        <div class="my_message">
                            <p class="p_message">I'm good </p>
                        </div>
                        <div class="response_message">
                            <p class="p_message">I'll come tomorrow</p>
                        </div>

                    </div>
                    <form>
                        <input type="text" id="emoji" placeholder="write your message" />
                    </form>

                </div>
            </div>
        </div>


        <!--Create model-->
        <div class="modal fade" id="create_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title w-100 fs-5 d-flex align-items-end justify-content-between"
                            id="exampleModalLabel">
                            <span class="title_create">Create new post</span>
                            <button class="next_btn_post btn_link"></button>
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img class="up_load" src="/Assets/imagem/upload.png" alt="upload">
                        <p>Drag photos and videos here</p>
                        <button class="btn btn-primary btn_upload">
                            select from your computer
                            <form id="upload-form">
                                <input class="input_select" type="file" id="image-upload" name="image-upload">
                            </form>
                        </button>
                        <div id="image-container" class="hide_img">
                        </div>
                        <div id="image_description" class="hide_img">
                            <div class="img_p"></div>
                            <div class="description">
                                <div class="cart">
                                    <div>
                                        <div class="img">
                                            <img src="/Assets/imagem/profile_img.jpg">
                                        </div>
                                        <div class="info">
                                            <p class="name">Zineb_essoussi</p>
                                        </div>
                                    </div>
                                </div>
                                <form>
                                    <textarea type="text" id="emoji_create" placeholder="write your message"></textarea>
                                </form>
                            </div>
                        </div>
                        <div class="post_published hide_img">
                            <img src="/Assets/imagem/uploaded_post.gif" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
       
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
    <script src="./owlcarousel/jquery.min.js"></script>
    <script src="./owlcarousel/owl.carousel.min.js"></script>
    <script src="./js/carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>