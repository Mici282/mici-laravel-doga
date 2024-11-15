<div>
    @if($errors->any())
       <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
       </ul>
    @endif

    @if(session('success'))
        <p>{{session('success')}}</p>
    @endif

    <ul>
        @foreach ($films as $film)
            <li value="{{$film->director}}">Rendező: {{$film->director}}</li>
            <li value="{{$film->title}}">Cím: {{$film->title}}</li>
            <li value="{{$film->release_year}}">Kiadás éve: {{$film->release_year}}</li>
            <br><br>
        @endforeach
    </ul>
</div>
