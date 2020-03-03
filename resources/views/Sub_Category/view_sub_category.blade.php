@include('header')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sub Category</div>

                <div class="card-body">
                    @if(session()->get('success'))
                        <div class="alert alert-success">
                          {{ session()->get('success') }}  
                        </div>
                      @endif
                </div>
                <div class="col-sm-12">
                    <a style="margin: 15px;" href="/sub_category" class="btn btn-primary">New Sub Category</a>
                </div>
        
                <div class="col-sm-12">
                    <table class="table table-striped" border="1">
                        <thead>
                            <th>Id</th>
                            <th>Category Name</th>
                            <th>Sub Category Name</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                                @foreach($res as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->category_name}}</td>
                                    <td>{{$row->sub_category_name}}</td>
                                    <td colspan=2>
                                        <!-- <a href=""><button type="button" class="btn btn-primary">View</button></a> -->
                                        <a href="/sub_category/edit/{{$row->id}}">
                                            <button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="/sub_category/destroy/{{$row->id}}">
                                            <button type="button" class="btn btn-danger">Delete</button></a>
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

    

@include('footer')