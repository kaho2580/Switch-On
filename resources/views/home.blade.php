<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
           
            
        <title>Switch On</title>
    </head>
    <body>
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
        
        <p class=posts>
            <a href='/posts'>炊飯器の準備はできたか。ならばここを押せッ！！</a>
        </p>
       
      <a href='/auto-complete-address'>位置情報検索</a>
      <a href='/google-autocomplete'>google map api 参考</a>
       
    </body>
</html>
