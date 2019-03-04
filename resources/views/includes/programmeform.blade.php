@if (isset($errors) && (count($errors) > 0))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<div class="form-group">
<label for="name">Name </label><em>*</em>
<input type="text" name="name" class="form-control" id="name" required>
</div>
<div class="form-group">
<label for="type">Initials</label><em>*</em>
<input type="text" name="initials" class="form-control" id="initials">
</div>

<div class="form-group">
    <input type="submit" class="btn btn-success" value="submit">
</div>



