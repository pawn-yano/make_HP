<x-layout>
    <a href="{{ route('index.posts') }}" class="re">戻る</a>
    <h1>
        <span>{{ $post->title }}</span>
        <span class="fa fa-thumbs-up likes"> {{ $post->likes }}</span>
        <form action="{{ route('like.posts', $post->id) }}" method="post">
            @method('PATCH')
            @csrf

            <button class="like">＋１いいね！</button>
        </form>
        <a href="{{ route('edit.posts', $post->id) }}" class="edit">編集</a>
        <button class="destroy" onclick="toggleDialog()">削除</button>
        <div id="dialog">
            <button class="close" onclick="toggleDialog()">✕</button>
            <p>この投稿を本当に削除しますか？</p>
            <div class="choices">
                <button onclick="toggleDialog()">キャンセル</button>
                <form action="{{ route('destroy.posts', $post->id) }}" method="post">
                    @method('DELETE')
                    @csrf

                    <button class="destroy">削除する</button>
                </form>
            </div>
        </div>
    </h1>
    <div class="lower">
        <span>作成：{{ $post->created_at }}</span>
        <span>更新：{{ $post->updated_at }}</span>
    </div>
    <p class="detail">{{ $post->detail }}</p>

    <h2>{{ $post->cmts }}件のコメント</h2>
    <ul>
        <li class="comment">
            <form action="{{ route('store.comments', $post->id) }}" method="post" class="left">
                @csrf

                <input type="text" name="body">
                <button>コメント</button>
            </form>
        </li>
        @foreach ($post->comments()->latest()->get() as $comment)
            <li class="comment">
                <span class="left">{{ $comment->body }}</span>
                <div class="right">
                    <span>{{ $comment->created_at }}</span>
                    <form action="{{ route('destroy.comments', $comment->id) }}" method="post">
                        @method('DELETE')
                        @csrf

                        <button class="destroy">✕</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-layout>
