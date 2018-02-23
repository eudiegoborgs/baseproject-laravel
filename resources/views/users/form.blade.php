
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($user)->name) }}" minlength="1" maxlength="255" required="true" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
    <label for="username" class="col-md-2 control-label">username</label>
    <div class="col-md-10">
        <input class="form-control" name="username" type="text" id="username" value="{{ old('username', optional($user)->username) }}" minlength="1" maxlength="255" required="true" placeholder="Enter username here...">
        {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email" class="col-md-2 control-label">email</label>
    <div class="col-md-10">
        <input class="form-control" name="email" type="text" id="email" value="{{ old('email', optional($user)->email) }}" minlength="1" maxlength="255" required="true" placeholder="Enter email here...">
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('token_api') ? 'has-error' : '' }}">
    <label for="token_api" class="col-md-2 control-label">token_api</label>
    <div class="col-md-10">
        <input class="form-control" name="token_api" type="text" id="token_api" value="{{ old('token_api', optional($user)->token_api) }}" maxlength="255" placeholder="Enter token api here...">
        {!! $errors->first('token_api', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
    <label for="password" class="col-md-2 control-label">password</label>
    <div class="col-md-10">
        <input class="form-control" name="password" type="text" id="password" value="{{ old('password', optional($user)->password) }}" minlength="1" maxlength="255" required="true" placeholder="Enter password here...">
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('remember_token') ? 'has-error' : '' }}">
    <label for="remember_token" class="col-md-2 control-label">remember_token</label>
    <div class="col-md-10">
        <input class="form-control" name="remember_token" type="text" id="remember_token" value="{{ old('remember_token', optional($user)->remember_token) }}" maxlength="100" placeholder="Enter remember token here...">
        {!! $errors->first('remember_token', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('created_at') ? 'has-error' : '' }}">
    <label for="created_at" class="col-md-2 control-label">created_at</label>
    <div class="col-md-10">
        <input class="form-control" name="created_at" type="text" id="created_at" value="{{ old('created_at', optional($user)->created_at) }}" placeholder="Enter created at here...">
        {!! $errors->first('created_at', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('updated_at') ? 'has-error' : '' }}">
    <label for="updated_at" class="col-md-2 control-label">updated_at</label>
    <div class="col-md-10">
        <input class="form-control" name="updated_at" type="text" id="updated_at" value="{{ old('updated_at', optional($user)->updated_at) }}" placeholder="Enter updated at here...">
        {!! $errors->first('updated_at', '<p class="help-block">:message</p>') !!}
    </div>
</div>

