<form class="ajax post-form" method="post" action="{{ route('api.comment.store', $post->id) }}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group">
        <textarea placeholder="What are your thoughts on this?" class="form-control" name="text" id="text" rows="3"></textarea>
    </div>
    <div class="form-actions text-right">
        <button type="submit" class="btn btn-orange">Submit</button>
    </div>
</form>