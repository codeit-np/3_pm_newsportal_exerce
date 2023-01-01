<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('article.create') }}" class="btn btn-primary">Post Article</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th style="width: 400px">Title</th>
                            <th>Posted</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($articlces as $index=>$item)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->created_at->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ route('article.edit',$item->id) }}" class="badge badge-primary text-white">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
