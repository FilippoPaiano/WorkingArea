<div class="col-12">
    
    @if(session('articleDeleted'))
    <div class="alert alert-danger">
        {{session('articleDeleted')}}
    </div>
    @endif
    
    <table class="table table-striped border">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Control</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->category}}</td>
                <td><a href="{{route('article.edit', compact('article'))}}" class="btn btn-secondary">Modify</a>
                    <button class="btn btn-danger" wire:click="destroy({{$article}})">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
