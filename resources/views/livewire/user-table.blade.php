<div>
    @include('alerts.alert')
    <table class="table table-dark">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('user.show', $user->id) }}" class="badge btn bg-success">show</a>
                        <a href="{{ route('user.edit', $user->id) }}" class="badge btn bg-warning">edit</a>
                        <button wire:click="destroy({{ $user->id }})" class="badge btn bg-danger">delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
