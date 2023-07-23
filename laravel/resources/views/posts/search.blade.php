<x-layout>
    <a href="{{ route('index.posts') }}" class="re">戻る</a>
    <h1>検索画面</h1>
    <form action="{{ route('search.posts') }}" method="get">
        @csrf

        <label>
            Title検索
            <input type="text" name="keyword" value="{{ $keyword }}">
        </label>
        <div class="btn"><button>検索</button></div>
    </form>

    <h2>検索結果</h2>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('text.posts', $post->id) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
</x-layout>
