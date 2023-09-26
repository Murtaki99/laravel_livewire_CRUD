<div>
    @include('alerts.alert')
    <div class="mb-3">
        <input type="text" class="form-control" wire:model.live="search" placeholder="Searching...">
    </div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>No.</th>
                <th>Products name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $index => $product)
                <tr>
                    <td>{{ $products->firstItem() + $index }}</td>
                    <td>{{ $product->name }}</td>
                    <td>Rp {{ $product->price }}</td>
                    <td>
                        <a href="" class="badge btn bg-success">show</a>
                        <a href="" class="badge btn bg-warning">edit</a>
                        <button wire:click="destroy({{ $product->id }})" class="badge btn bg-danger">delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links() }}
</div>
