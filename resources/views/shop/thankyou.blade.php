@extends('layouts.app')
@section('content')
<div class="container">
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <Strong>Success!!!Your Order <b>{{ $order }}</b></Strong> Has been Successfully Placed
    </div>
    <div class="row">
        <h1 class="text-center"><i style="font-size:200px;color:#562fc6" class="fa fa-check-circle"></i></h1>
        <h1 class="text-center">Thank You for Shopping with Us</h1>
        <h4 class="pull-right"><a href="{{ route('view.order',['order'=>$order]) }}" class="text-center"><i class="fa fa-eye"></i>&nbsp;View Order</a></h4>
    </div>

    <table class="greenTable">
        <thead>
        <tr>
        <th>head1</th>
        <th>head2</th>
        <th>head3</th>
        <th>head4</th>
        <th>head5</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
        <td colspan="5">
        <div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
        </td>
        </tr>
        </tfoot>
        <tbody>
        <tr>
        <td>cell1_1</td>
        <td>cell2_1</td>
        <td>cell3_1</td>
        <td>cell4_1</td>
        <td>cell5_1</td>
        </tr>
        <tr>
        <td>cell1_2</td>
        <td>cell2_2</td>
        <td>cell3_2</td>
        <td>cell4_2</td>
        <td>cell5_2</td>
        </tr>
        <tr>
        <td>cell1_3</td>
        <td>cell2_3</td>
        <td>cell3_3</td>
        <td>cell4_3</td>
        <td>cell5_3</td>
        </tr>
        <tr>
        <td>cell1_4</td>
        <td>cell2_4</td>
        <td>cell3_4</td>
        <td>cell4_4</td>
        <td>cell5_4</td>
        </tr>
        <tr>
        <td>cell1_5</td>
        <td>cell2_5</td>
        <td>cell3_5</td>
        <td>cell4_5</td>
        <td>cell5_5</td>
        </tr>
        </tbody>
        </table>
</div>
@stop