@extends("layout")

@section("content")
    <div class="row">
        <div class="mx-auto col-4">
            <form method="POST" action="{{ route('mechanics.create') }}">
                @csrf()
                <div class="form-group mb-3">
                    <label>Név</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control"
                    >
                </div>
                <div class="form-group mb-3">
                    <label>Szervíz</label>
                    <select name="service_id" class="form-select">
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}">
                                {{ $service->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success mt-3">
                    Létrehozás
                </button>
            </form>
        </div>
    </div>
@stop