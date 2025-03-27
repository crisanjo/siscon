@if ($errors->any())
    <div class="alert alert-warning alert-dismissible fade show pb-0" role="alert" id="alert-danger">
        <strong>Atenção:</strong> <br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show pb-0" role="alert" id="alert-success">
        <p>{{ $message }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif
@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-dismissible fade show pb-0" role="alert" id="alert-warning">
        <p>{{ $message }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($message = Session::get('danger'))
    <div class="alert alert-danger alert-dismissible fade show pb-0" role="alert" id="alert-danger">
        <p>{{ $message }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
