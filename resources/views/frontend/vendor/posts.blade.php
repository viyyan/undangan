    @foreach($posts as $post)
        <div class="article-blocks">
            <div class="article-blocks_images">
                <a href="{{ route('parenting-tips.details', $post->slug) }}">
                    <img src="{{ $post->heroUrl('410x312') }}">
                </a>
            </div>
            <div class="article-blocks_desc">
                <div class="article-blocks_tag {{ isset($post->category->color) ? $post->category->color : 'default' }}">
                    <span class="tag">{{ $post->category->name }}</span>
                    <a class="link-button" href="{{ route('parenting-tips.details', $post->slug) }}" >Read more</a>
                </div>
                <p>
                    {{ $post->title }}
                </p>
            </div>
        </div>
    @endforeach
