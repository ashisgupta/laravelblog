@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

 <h4>Write Your Post Here</h4>
 <div class=”pull-right”>
<a href="../posts"><div class="btn btn-success">Back</div></a>
 </div>
<form class="form-horizontal" method="POST" action="{{ url('posts/store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('‘body’') ? ' has-error' : '' }}">
                            <label for="‘body’" class="col-md-4 control-label">Body</label>

                            <div class="col-md-6">
                                <textarea id="‘body’" type="text" class="form-control" name="‘body’"  value="{{ old('‘body’') }}" required> </textarea>

                                @if ($errors->has('‘body’'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('‘body’') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      

                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-default">
                                    Publish Your Blog Post
                                </button>
                            </div>
                        </div>
                    </form>
					  </div>
                        </div>
						</div>
@endsection
