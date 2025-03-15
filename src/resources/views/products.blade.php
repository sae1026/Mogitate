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

    <mein>
        <div class="content">

            <div class="content-header">
                <div class="content-header_title">商品一覧</div>
                <a href="/register" class="content-header_button" type="submit">＋商品を追加</a>
            </div>


            <aside class="sidebar">

                <div class="sidebar-form">
                    <div class="sidebar-form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="商品名で検索" />
                        </div>
                    </div>

                    <div class="sidebar-form__group-content">
                        <div class="sidebar-form__group-title">
                            <span class="form__label--item">価格順で表示</span>
                        </div>
                        <div class="sidebar-form__input--select">
                            <select type="text" name="price" 　placeholder="価格に並べ替え">
                                <option value="高い順位表示">高い順に表示</option>
                                <option value="低い順位表示">低い順に表示</option>
                            </select>
                        </div>
                    </div>
                </div>

            </aside>


            @foreach($products as $product)
            <div class="product-list">

                <div class="product__item">
                    <a href="/{productld}?id={{$product['id']}}">
                        <img src="{{asset(session('img_path'))}}" alt="">
                        <p class="product-info">
                            <span class="product-info_name">{{$product['name']}}</span>
                            <span class="product-info_price">{{$product['price']}}</span>
                        </p>
                    </a>
                </div>

            </div>
            @endforeach

        </div>
    </mein>
</body>

</html>

<!--session('img_path')