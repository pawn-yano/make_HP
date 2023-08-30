<x-layout>
    <h1>
        <span>{{ config('const.BOARD_NAME') }}</span>
        <a href="{{ route('create.posts') }}" class="create">新規追加</a>
        <a href="{{ route('search.posts') }}" class="search">検索</a>
    </h1>
    @include('components.post_list', ['posts' => $posts])
</x-layout>
