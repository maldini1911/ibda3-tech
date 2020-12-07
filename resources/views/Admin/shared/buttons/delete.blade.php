<form action="{{route($routeName.'.destroy', ['id' => $row])}}" method="POST">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button type="submit" rel="tooltip" class="btn link-delete">
    <i class="fas fa-user-times"></i>
    </button>
</form>
