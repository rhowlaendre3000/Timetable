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
<label for="course">Course</label><em>*</em>
<select type="text" name="course" class="form-control" id="course" required>
    @foreach($programme->course as $courses)
    <option> {{ $courses->coursetitle}} </option>
    @endforeach
</select>

</div>

<div class="form-group">
<label for="date">Date</label><em>*</em>
<input type="date" name="date" class="form-control" id="date" required>
</div>

<div class="form-group" style="">
<label for="time">Time</label><em>*</em>
<div class="row">
<div class="col-sm-5">
<input type="time" name="timefrom" class="form-control" id="timefrom" style="" required>
</div>
<div class="col-sm-2">to</div>
<div class="col-sm-5">
<input type="time" name="timeto" class="form-control" id="timeto" required>
</div>
</div>
</div>

<div class="form-group">
<label for="venue">Venue</label><em>*</em>
<input type="text" name="venue" class="form-control" id="venue" required>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-success" value="submit">
</div>



