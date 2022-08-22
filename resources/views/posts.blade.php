<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>posts</title>
    </head>
        <body>
            <h1>ついに、スイッチを押すか...さぁ投稿しよう！</h1>
                <form action="/views" method="POST">
                    <h2>何合炊く？</h2>
                                <select name="category_type">
                                    <option id="category1" type="button">1合</option>
                                    <option id="category2" type="button">1.5合</option>
                                    <option id="category3" type="button">2合</option>
                                    <option id="category4" type="button">3合</option>
                                </select>
                                
                                
                            <h2>炊く炊飯器の写真を載せてくれ！！</h2>
                                <div class="image_insert">
                                    <section class="form-container">
                                            <!-- input 属性はtype="file" と指定-->
                                            <input type="file" name="upload_image">
                                    </section>
                                </div>
                    
                        <div class="contents">
                            <h2>Contents</h2>
                            <textarea name="post[contents]" placeholder="意気込みやこれから炊く者へ一言。">{{ old('post.contents') }}</textarea>
                            <p class="contents__error" style="color:red">{{ $errors->first('post.contents') }}</p>
                        </div>
                        
                            <input type="submit" value="保存"/>
                </form>
                
            <div class="back">[<a href="/">back</a>]</div>
        
        </body>
</html>