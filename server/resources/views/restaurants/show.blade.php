@extends('layouts.app')

@section('title', '一覧画面')

@section('content')
    <div>
    @include('layouts.restaurant', compact('restaurant'))
    </div>
    <table class="table-bordered mb-5 mt-3">
        <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
        <tbody>
            <tr>
                <th>店名</th>
                <td>
                    <p>{{ $restaurant->name }}</p>
                    <p>{{ $restaurant->name_kana }}</p>
                </td>
            </tr>
            <tr>
                <th>住所</th>
                <td>{{ $restaurant->address }}</td>
            </tr>
            <tr>
                <th>営業時間</th>
                <td>{{ $restaurant->opentime }}</td>
            </tr>
            <tr>
                <th>定休日</th>
                <td>{{ $restaurant->holiday }}</td>
            </tr>
            <tr>
                <th>カテゴリー</th>
                <td>{{ $restaurant->category->name }}</td>
            </tr>
            <tr>
                <th>その他</th>
                <td>{{ $restaurant->note }}</td>
            </tr>
        </tbody>
    </table>
    <a href="/restaurants/">戻る</a>
@endsection