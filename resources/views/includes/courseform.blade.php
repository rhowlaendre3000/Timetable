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
<label for="name">Course Title</label><em>*</em>
<input type="text" name="title" class="form-control" id="title" required>
</div>
<div class="form-group">
<label for="code">Course Code</label><em>*</em>
<input type="text" name="code" class="form-control" id="code" required>
</div>
<div class="form-group">
<label for="lecturer">Course Lecturer</label><em>*</em>
<input type="text" name="lecturer" class="form-control" id="lecturer" required>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-success" value="submit">
</div>



