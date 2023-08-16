<ul>
    @foreach ($posts as $post)
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
