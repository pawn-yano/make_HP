<x-layout>
    <a href="{{ route('index.posts') }}" class="re">戻る</a>
    <h1>検索画面</h1>
    <form action="{{ route('search.posts') }}" method="get">
        @csrf

        <label>
            Title検索
            <input type="text" name="keywords" value="{{ request()->input('keywords') }}">
        </label>
        <div class="btn"><button>検索</button></div>
    </form>

    <h2 class="float">{{ count($posts['likes']) }}件の検索結果</h2>
    @include('components.post_list', ['posts' => $posts])
</x-layout>
