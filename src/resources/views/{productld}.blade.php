<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mogitate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1>Mogitate</h1>
        </div>
    </header>

    <main>

        <div class="detail-form__content">

            <div class="detail-form__heading">
                <a href="/products">商品一覧</a>
                <span>＞{{$product ?? ''->name}}</span>
            </div>


            <form class="form" action="/{productld}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">商品画像</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--image">
                            <img src="{{asset(session('img_path'))}}" alt="">
                            <input type="file" name="image" value="" />
                        </div>

                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>


                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">商品名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" value="{{$product ?? ''->name}}" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>


                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">値段</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="price" value="{{$product ?? ''->price}}" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>


                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">季節</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--checkbox">
                            <input type="checkbox" name="season_id" value="1">春</input>
                            <input type="checkbox" name="season_id" value="2">夏</input>
                            <input type="checkbox" name="season_id" value="3">秋</input>
                            <input type="checkbox" name="season_id" value="4">冬</input>
                        </div>
                    </div>
                </div>


                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">商品説明</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="description" value="">{{$product ?? ''->description}}</textarea>
                        </div>
                    </div>
                </div>


                <div class="form__button">
                    <button class="form__button-return" type="submit">戻る</button>
                    <button class="form__button-save" type="submit">変更を保存</button>
                    <button class="form__button-delete" type="submit">削除</button>
                </div>

            </form>
        </div>
    </main>
</body>

</html>