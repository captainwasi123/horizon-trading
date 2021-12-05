@foreach($qoutations as $key => $val)
  <tr>
    <td>{{++$key}}</td>
    <td>{{@$val->property->owner_name}}</td>
    <td>{{number_format(@$val->property->owner_demand)}}/-</td>
    <td>{{@$val->property->area->area}}</td>
    <td>{{@$val->property->precent}}</td>
    <td>{{@$val->property->plot_no}}</td>
    <td>{{@$val->property->plot_size}}</td>
    <td>{{@$val->phone->label}}</td>
    <td><strong>{{number_format(@$val->qoutation)}}/-</strong></td>
    <td><span class="badge badge-info">{{@$val->property->status}}</span></td>
  </tr>
@endforeach