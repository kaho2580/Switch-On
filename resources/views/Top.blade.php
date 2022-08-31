<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
           
            
        <title>Switch On</title>
    </head>
        <body>
          <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/profile') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> {{ Auth::user()->name }}</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ログイン</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">新規登録</a>
                            @endif
                        @endauth
                    </div>
                @endif
                
            <h1>まだ炊いていないのか、早く炊けツ！！</h1>
                <!-- ここにGoogle Mapを表示する -->
                    <div id="map" class="map"></div>
                        <style>
                            .map {
                                width: 400px;
                                height: 400px;
                            }
                        </style>
                            <!-- APIキーを指定してjsファイルを読み込む -->
                            <script async src="https://maps.googleapis.com/maps/api/js?key={{config('app.key_API03')}}&callback=initMap"></script>
                                <script type="text/javascript">
                                  function initMap(){
                                    const myLatLng = { lat: 35.6585805, lng: 139.7454329 };
                                    const map=new google.maps.Map(document.getElementById("map"),{
                                      zoom: 5,
                                      center: myLatLng,
                                    });
                                  }
                                  
                                  window.initMap=initMap;
                            </script>
                                <a href='/posts'>炊飯器の準備はできたか。ならばここを押せッ！！</a>
        </body>
</html>
