@php
    $orders = config('const.ORDERS');
@endphp
<div class="sort" id="sort">
    並び順：
    <select onchange="switchOrder(this.value)">
        @foreach ($orders as $order_en => $order_ja)
            <option value="{{ $order_en }}">{{ $order_ja }}</option>
        @endforeach
    </select>
</div>
@foreach (array_keys($orders) as $order_en)
    <ul class="sorted" id="{{ $order_en }}">
        @foreach ($posts[$order_en] as $post)
            <li>
                <div class="left">
                    <a href="{{ route('text.posts', $post->id) }}">{{ $post->title }}</a>
                    <span class="fa fa-thumbs-up likes"> {{ $post->likes }}</span>
                    <span class="fa fa-commenting cmts"> {{ $post->cmts }}</span>
                </div>
                <div class="right">
                    <span>作成：{{ $post->created_at }}</span>
                    <span>更新：{{ $post->updated_at }}</span>
                </div>
            </li>
        @endforeach
    </ul>
@endforeach
