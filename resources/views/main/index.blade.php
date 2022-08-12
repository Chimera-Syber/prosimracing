@extends('layouts.main')

@section('content')

    <h1 class="main-section__title">Новости, статьи, репортажи и видео</h1>
    <!-- Posts -->
    @csrf
    <div class="main-section__posts-container">
        
        <script>
            $(document).ready(function(){

                var _token = $('input[name="_token"]').val();

                load_data('', _token);


                function load_data(id="", _token)
                {
                    $.ajax({
                        url:"{{ route('main.index.load_more') }}",
                        method:"POST",
                        data:{id:id, _token:_token},
                        success:function(data)
                        {
                            $('#load_more_button').remove();
                            $('.main-section__posts-container').append(data);
                            showPostsBackgrounds();
                        }
                    })
                }


                $(document).on('click', '#load_more_button', function(){
                    var id = $(this).data('id');
                    $('#load_more_button').html('Загрузка...');
                    load_data(id, _token);
                });

                function showPostsBackgrounds() {
                    let postPreviewImage = document.querySelectorAll('.main-section__post-preview-image');

                    for (i = 0; i < postPreviewImage.length; i++) {
                        var src = postPreviewImage[i].getAttribute('data-img');
                        postPreviewImage[i].style.backgroundImage = "url('" + src + "')";
                    }
                }
                
            });
        </script>
    </div>

    @include('main.includes.main-banner')
    @include('main.includes.coverage')

@endsection

   
       
        
        
       
       
       
    