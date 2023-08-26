<div>
    @foreach($data as $info)

        <div>
            <h2> {{$info->title}}</h2>
            <p> {{$info->details}}</p>
        </div>

    @endforeach
</div>
