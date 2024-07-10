<h1>Index Us</h1>
<p>This is the Index us page</p>

<form action="{{ url('users', $id) }}" method="post">
            @csrf
            @method('DELETE')
        <div class="form-group">
            <button class="btn btn-primary" type="Submit">Submit</button>
        </div>
</form>