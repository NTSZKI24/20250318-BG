@extends("layout")

@section("content")
    <div class="row">
        <div class="col-12">
            <h1>Szerelők lista</h1>
            <a
                class="btn btn-primary"
                href="{{ route('mechanics.createForm') }}"
            >
                Új szerelő
            </a>
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Név</th>
                    <th>Szervíz</th>
                    <th>Műveletek</th>
                </tr>
                @if(sizeof($mechanics) > 0)
                    @foreach ($mechanics as $mechanic)
                        <tr>
                            <td>
                                {{ $mechanic->id }}
                            </td>
                            <td>
                                {{ $mechanic->name }}
                            </td>
                            <td>
                                {{ isset($mechanic->service) ? $mechanic->service->name : "" }}
                            </td>
                            <td class="d-flex flex-col">
                                <a 
                                    class="btn btn-warning"
                                    href="{{ route('mechanics.updateForm', ['mechanic' => $mechanic->id]) }}"
                                >
                                    Módosítás
                                </a>
                                <form 
                                    method="POST"
                                    action="{{ route('mechanics.delete', ['mechanic' => $mechanic->id]) }}"
                                >
                                    @csrf()
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Törlés
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">
                            <h1>Nincs adat!</h1>
                        </td>
                    </tr>
                @endif
            </table>
        </div>
    </div>
@stop