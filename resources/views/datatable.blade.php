<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
</head>

<body>
    <table id="xample_nguoimua" class="display" style="width:100%">
        <thead>
            <tr>
            <th>
                                Id</th>
                            <th>
                                Tiêu đề</th>
                            <th>
                                Tên liên hệ </th>
                            <th>
                                Nội dung</th>
                            <th>
                                Sdt</th>
                            <th>
                                Địa chỉ</th>
                            <th>
                                Email
                            </th>
                            <th>
                                Thao tác
                            </th>

            </tr>
        </thead>
        <tbody>
            @foreach($contact as $item)

            <tr>
                <td> {{$item->id}}</td>
                <td>        {{$item->subject}}
                <br/>
                          <small>
                              Created   {{$item->created_at}}
                          </small>

                </td>
                <td>
                                {{$item->fullname}}

                            </td>
                            <td>
                                {{$item->content}}

                            </td>
                            <td>
                                {{$item->mobile}}


                            </td>
                            <td>
                                {{$item->address}}


                            </td>
                            <td>
                                {{$item->email}}


                            </td>
              
             
             

                <td class="project-actions text-right">
                         
                          <a class="btn btn-info btn-sm" href="{{url('post/'.$item->id.'/edit')}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>


                                </a>
                                <a class="btn btn-danger btn-sm" href="{{url('protype/'.$item->protype_id.'/edit')}}">
                                    <form action="{{ url('post/'.$item->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf


                                        <input class="fas fa-trash bg-danger" style="border:none" type="submit"
                                            value="Delete">
                                    </form>

                                </a>
                      </td>
                <!-- <td>$320,800</td> -->
            </tr>
            @endforeach


        </tbody>
        <tfoot>
            <tr>
          
            Id</th>
                            <th>
                                Tiêu đề</th>
                            <th>
                                Tên liên hệ </th>
                            <th>
                                Nội dung</th>
                            <th>
                                Sdt</th>
                            <th>
                                Địa chỉ</th>
                            <th>
                                Email
                            </th>
                            <th>
                                Thao tác
                            </th>
            </tr>
        </tfoot>
    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#xample_nguoimua').DataTable();
    });
    </script>

</body>

</html>