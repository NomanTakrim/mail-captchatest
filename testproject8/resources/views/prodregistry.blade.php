@foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->type}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->created_at}}</td>
                <td>{{$product->updated_at}}</td>

                <td>
                    <form  action="/updateform" method="post">
                    <input type="hidden" name="id" value="{{$product->id}}">
                    @csrf
                    <button class="btn btn-primary">UPDATE</button>
                    </form>
                <td>
                    <form action="/delproduct" method="post">
                        <input type="hidden" name="id" value="{{$product->id}}">
                        @csrf
                    <button class="btn btn-secondary" onclick="return confirm('Are you sure ?')">DELETE</button>
                </td>
                    </form>
                

            </tr>
            @endforeach