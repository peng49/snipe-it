<!-- Name -->
<div class="form-group {{ $errors->has('code') ? ' has-error' : '' }}">
    <label for="name" class="col-md-3 control-label"> {{ trans('general.code') }}</label>
    <div class="col-md-7 col-sm-12 required">
        <input class="form-control" type="text" name="code" aria-label="code" id="code" value="{{ old('code', $item->code) }}" data-validation="required" required />
        {!! $errors->first('code', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
    </div>
</div>
