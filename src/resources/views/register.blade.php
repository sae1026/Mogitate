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
        <div class="register-form__content">
            <div class="register-form__heading">
                <h2>商品登録</h2>
            </div>


            <form class="form" action="/products" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">商品名</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="商品名を入力" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>


                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">値段</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="price" placeholder="値段を入力" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>


                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">商品画像</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--image">
                            <input type="file" name="image" placeholder="ファイルを選択" />
                        </div>
                        
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>


                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">季節</span>
                        <span class="form__label--required">必須</span>
                        <span class="form__label--multiple">複数選択可</span>
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
                            <textarea name="description" placeholder="商品の説明を入力"></textarea>
                        </div>
                    </div>
                </div>


                <div class="form__button">
                    <button class="form__button-submit" type="submit">戻る</button>
                    <button class="form__button-submit" type="submit">登録</button>
                </div>

            </form>
        </div>
    </main>
</body>

</html>