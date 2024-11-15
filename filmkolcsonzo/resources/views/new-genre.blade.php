<div>
@if(session('success'))
        <p>{{session('success')}}</p>
    @endif
    <form action="{{route('new-genre.store')}}" method="post">
        @csrf
        <label for="name">Genre name: </label>
        <input type="text" name="name" id="name">

        <button type="submit">Submit</button>
    </form>
</div>
