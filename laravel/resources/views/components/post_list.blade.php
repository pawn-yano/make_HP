@php
    $orders = config('const.ORDERS_JA');
@endphp
<div class="sort" id="sort" data-count-orders="{{ count($orders) }}">
    並び順：
    <select onchange="switchOrder(this.value)">
        @for ($i = 0; $i < count($orders); $i++)
            <option value="{{ $i }}">{{ $orders[$i] }}</option>
        @endfor
    </select>
</div>
@for ($i = 0; $i < count($orders); $i++)
    <ul id="order_{{ $i }}">
        @foreach ($posts[$i] as $post)
            <li>
                <div class="left">
                    ・ <a href="{{ route('text.posts', $post->id) }}">{{ $post->title }}</a>
                    <span class="fa fa-thumbs-up likes"> {{ $post->likes }}</span>
                </div>
                <div class="right">
                    <span>作成：{{ $post->created_at }}</span>
                    <span>更新：{{ $post->updated_at }}</span>
                </div>
            </li>
        @endforeach
    </ul>
@endfor
