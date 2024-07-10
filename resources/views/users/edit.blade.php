<h1>Users Edit Page</h1>
<p>This is the Edit page with id {{ $id }}</p>

<div class="row">
    <div class="col-6">  
        <form action="{{ url('users', $id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text class="form-control" id="fullname" name="fullname" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="Submit">Submit</button>
            </div>
        </form>
    </div>
</div>

<form action="{{ url('users', $id) }}" method="post">
            @csrf
            @method('DELETE')
        <div class="form-group">
            <button class="btn btn-primary" type="Submit">Submit</button>
        </div>
</form>