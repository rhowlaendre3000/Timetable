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
<label for="name">Name</label><em>*</em>
<input type="text" name="name" class="form-control" id="name" required>
</div>
<div class="form-group">
<label for="email">E-mail</label><em>*</em>
<input type="email" name="email" class="form-control" id="email" required>
</div>
<div class="form-group">
<label for="level">Level</label><em>*</em>
<select type="text" name="level" class="form-control" id="programme" required>
    <option>100</option>
    <option>200</option>
    <option>300</option>
    <option>400</option>


</select>
</div>
<div class="form-group">
<label for="programme">Programme/Department</label><em>*</em>
<select type="text" name="programme" class="form-control" id="programme" required>
        @foreach($programme as $programmes)
        <option>{{$programmes->name}}</option>
        @endforeach
</select>

</div>
<div class="form-group">
<label for="studentid">Student/Staff ID</label><em>*</em>
<input type="number" name="studentid" class="form-control" id="studentid" required>
</div>
<div class="form-group">
<label for="password">PIN</label><em>*</em>
<input type="password" name="password" class="form-control" id="password" required>
</div>
<div class="form-group">
<label for="password">Confirm PIN</label><em>*</em>
<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-success" value="Register">
</div>



