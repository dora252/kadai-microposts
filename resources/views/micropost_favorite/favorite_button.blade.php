if (Auth::user()->is_favorite($micropost->id))
    {!! Form::open(['route' => ['user.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        <button type="submit" class="btn btn-default btn-xs" aria-label="Left Align">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </button>
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['user.favorite', $micropost->id]]) !!}
        <button type="submit" class="btn btn-info btn-xs" aria-label="Left Align">
            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
        </button>
        
    {!! Form::close() !!}
@endif