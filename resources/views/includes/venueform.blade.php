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
<label for="venue">Venue</label><em>*</em>
<input type="text" name="venue" class="form-control" id="venue" required>
</div>
<div class="form-group">
<label for="room">Room</label><em>*</em>
<input type="text" name="room" class="form-control" id="room" required>
</div>



<div class="form-group">
    <input type="submit" class="btn btn-success" value="submit">
</div>



