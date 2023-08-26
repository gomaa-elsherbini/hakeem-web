<div>
    @foreach($data as $info)

        <div>
            <h2> {{$info->name}}</h2>
            <p> {{$info->description}}</p>
        </div>

    @endforeach
</div>
