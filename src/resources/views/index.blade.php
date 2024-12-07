@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
    <div class="contact-form__content">
        <div class="contact-form__heading">
            <h2>Contact</h2>
        </div>
        <form class="form" action="/contacts/confirm" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="last_name" placeholder="例：山田" value="{{ old('last_name') }}" />
                        <input type="text" name="first_name" placeholder="例：太郎" value="{{ old('first_name') }}" />
                    </div>
                    <div class="form__error">
                        @error('last_name') <p>{{ $message  }}</p> @enderror
                        @error('first_name') <p>{{ $message  }}</p> @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">性別</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--radio">
                        <input id="men" type="radio" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : '' }} />
                        <label for="men">男性</label>
                        <input id="female" type="radio" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }} />
                        <label for="female">女性</label>
                        <input id="other" type="radio" name="gender" value="other" {{ old('gender') == 'other' ? 'checked' : '' }} />
                        <label for="other">その他</label>
                    </div>
                    <div class="form__error">
                        @error('gender')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">電話番号</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--tel">
                        <input type="text" name="tel1" pattern="\d{3}" placeholder="090" value="{{ old('tel1') }}" />
                        <span>-</span>
                        <input type="text" name="tel2" pattern="\d{4}" placeholder="1234" value="{{ old('tel2') }}" />
                        <span>-</span>
                        <input type="text" name="tel3" pattern="\d{4}" placeholder="5678" value="{{ old('tel3') }}" />
                    </div>
                    <div class="form__error">
                        @error('tel') <p>{{ $message }}</p> @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">住所</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
                    </div>
                    <div class="form__error">
                        @error('address')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">建物名</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせの種類</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--select">
                        <select name="inquiry_type" required>
                            <option value="" {{ old('inquiry_type') == '' ? 'selected' : '' }}>選択してください</option>
                            <option value="ProductDelivery" {{ old('inquiry_type') == 'ProductDelivery' ? 'selected' : '' }}>商品のお届けについて</option>
                            <option value="ProductReplacement" {{ old('inquiry_type') == 'ProductReplacement' ? 'selected' : '' }}>商品の交換について</option>
                            <option value="ProductTrouble" {{ old('inquiry_type') == 'ProductTrouble' ? 'selected' : '' }}>商品トラブル</option>
                            <option value="other" {{ old('inquiry_type') == 'other' ? 'selected' : '' }}>その他</option>
                        </select>
                    </div>
                    <div class="form__error">
                        @error('inquiry_type')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせ内容</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--textarea">
                        <textarea name="content" placeholder="お問合せ内容をご記載ください">{{ old('content') }}</textarea>
                    </div>
                    <div class="form__error">
                        @error('content')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">確認画面</button>
            </div>
        </form>
    </div>
@endsection

