@if($errors->count() > 0)
    <ul class="list-group-item">
        @foreach($errors->all() as $error)
           <li class="list-group-item text-danger">
               {{ $error }}
           </li>
        @endforeach
    </ul>
@endif