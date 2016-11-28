@extends(config('view.layout', 'layouts.default') . '.app')

@section('content')
    <div class="thread">
        <div class="row">
            <div class="col-md-3 hidden-sm hidden-xs">
                @widget('profile')
                @widget('users')
            </div>
            <div class="col-md-6 col-sm-12 ">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object avatar" src="{{ $user->photo }}"
                                         alt="Generic placeholder image">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">{{ $user->name }}</h4>
                                {!! $post->content->htmlText() !!}
                                @include('posts.partials.footer', compact('post', 'comment'))
                                <hr>

                                <div id="thread">
                                    <ul class="media-list">
                                    @forelse($comments as $comment)
                                        <li class="media">
                                            @include('posts.partials.comment', compact('comment'))
                                        </li>
                                    @empty
                                    @endforelse
                                    </ul>
                                </div>
                                @include('posts.partials.reply', compact('post'))
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 hidden-sm hidden-xs">
                @widget('trending')
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="{{ asset('assets/js/layouts/default/posts/index.js') }}"></script>
@endpush