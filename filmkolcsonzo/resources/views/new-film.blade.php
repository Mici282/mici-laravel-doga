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

    <form action="{{route('new-film.store')}}" method="post">
        @csrf
        <label for="title">Title: </label>
        <input type="text" name="title" id="title">
        <br>
        <label for="director">Director:</label>
        <input type="text" name="director" id="director">
        <br>
        <label for="release_year">Release year:</label>
        <input type="number" name="release_year" id="release_year">
        <br>
        <select name="" id="">
            @foreach ($genres as $genre)
                <option value="{{$genre->name}}">{{$genre->name}}</option>
            @endforeach
        </select>

        <button type="submit">Save</button>
        

        
    </form>
</div>
