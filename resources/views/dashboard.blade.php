<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
    <div class="row">
            <table class="table table-bordered">
                <thead>
                <form action="addtodo" method='post' enctype="multipart/form-data">
                    @csrf
                    <th> Task</th>
                    <th><input type='text' name='name' placeholder='Title' /></th>
                    <th><input type='text' name='description' placeholder='Description'/></th>
                    <th><input type='date' name='date' /></th>
                    <th><button class="btn btn-outline-success" id="addbtn" type='submit'> Add </button></th>
    </form>
                   
    
                </thead>
                <tbody> 
    @foreach ($list as $keys => $Pro)
        <tr>
            <td><input type='checkbox' onclick="taskdone(this)" /></td>
            <td class="strikeable">
                @if ($Pro->is_done)
                    <span class="strikethrough">{{ $Pro->name }}</span>
                @else
                    <span>{{ $Pro->name }}</span>
                @endif
            </td>
            <td class="strikeable">{{ $Pro->description }}</td>
            <td class="strikeable">{{ $Pro->date}}</td>
            <td>
                <a class="btn btn-outline-danger"  href="{{ URL('delete/'.$Pro->id) }}">Delete</a>
            </td>
        </tr>
    @endforeach
</tbody>
            </table>
        </div>
    </div>
            </div>
        </div>
    </div>
</x-app-layout>
