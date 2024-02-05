<x-app-layout>
    <x-dashboard.table-list :data=$receivers dataTitle="Receivers" dataCreateLink="/receiver/create">

        <tbody>
            @foreach ($receivers as $receiver)
                <tr>
                    <td>{{ $receiver->id }}</td>
                    <td>{{ $receiver->name }}</td>
                    <td>{{ $receiver->address }}</td>
                    <td>
                        <div class="d-flex">
                            <a
                                href="#"
                                class="btn btn-primary shadow btn-xs sharp me-1"
                            ><i class="fas fa-pencil-alt"></i></a>
                            <a
                                href="#"
                                class="btn btn-danger shadow btn-xs sharp"
                            ><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                </tr>

            @endforeach

        </tbody>

    </x-dashboard.table-list>

</x-app-layout>
