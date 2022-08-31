<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
        <title>posts</title>
    </head>
        <body>
            <h1>ついに、スイッチを押すか...さぁ投稿しよう！</h1>
                <form action="/store" method="POST">
                    @csrf
                        <h2>炊く炊飯器の写真を載せてくれ！！</h2>
                            <div class="image_insert">
                                <section class="form-container">
                                    <!-- input 属性はtype="file" と指定-->
                                    <input type="file" name="posts[image]">
                                </section>
                            </div>
                                <div class="container mt-5">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12 m-auto">
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="autocomplete"> どこで炊いてる？ </label>
                                                        <input type="text" name="posts[address]" id="autocomplete" class="form-control" placeholder="Select Location">
                                                    </div>
                                                        <div class="form-group" id="lat_area">
                                                            <label for="latitude"> 緯度 </label>
                                                            <input type="text" name="posts[latitude]" id="latitude" class="form-control">
                                                        </div>
                                                            <div class="form-group" id="long_area">
                                                                <label for="latitude"> 経度 </label>
                                                                <input type="text" name="posts[longitude]" id="longitude" class="form-control">
                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="contents">
                                        <h2>勇気づける一言</h2>
                                            <textarea name="posts[comment]" placeholder="意気込みやこれから炊く者へ一言。">{{ old('post.contents') }}</textarea>
                                            <p class="contents__error" style="color:red">{{ $errors->first('post.contents') }}</p>
                                    </div>
                                        <input type="submit" value="保存"/>
                </form>
                
            <div class="back">[<a href="/">今日は食べないか...それもいいだろう</a>]</div>
            
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            
    <!google API 周り>
            <script src="https://maps.google.com/maps/api/js?key={{config('app.key_API04')}}&libraries=places&callback=initAutocomplete" type="text/javascript"></script>
             
            <script>
                $(document).ready(function() {
                    $("#lat_area").addClass("d-none");
                    $("#long_area").addClass("d-none");
                });
            </script>
            
                <script>
                    google.maps.event.addDomListener(window, 'load', initialize);
                    
                    function initialize() {
                        var input = document.getElementById('autocomplete');
                        var autocomplete = new google.maps.places.Autocomplete(input);
                        
                            autocomplete.addListener('place_changed', function() {
                                var place = autocomplete.getPlace();
                                    $('#latitude').val(place.geometry['location'].lat());
                                    $('#longitude').val(place.geometry['location'].lng());
                                
                                        $("#lat_area").removeClass("d-none");
                                        $("#long_area").removeClass("d-none");
                                        });
                                }
                </script>
        
        </body>
</html>