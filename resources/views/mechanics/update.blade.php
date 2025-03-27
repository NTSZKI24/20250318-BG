@extends("layout")

@section("content")
    <div class="row">
        <div class="mx-auto col-4">
            <form 
                method="POST" 
                action="{{ route('mechanics.update', ['mechanic' => $mechanic->id]) }}"
            >
                @csrf()
                <div class="form-group">
                    <label>Név</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="{{ $mechanic->name }}"
                    >
                </div>
                <button type="submit" class="btn btn-success mt-3">
                    Módosítás
                </button>
            </form>
        </div>
    </div>
@stop