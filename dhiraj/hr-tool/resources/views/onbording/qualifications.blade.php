@extends('layout')
@section('content') <?php
$i=0;
?>     
                                @foreach($posts as $item)
                                    <tr>
                                       
                                        <td><?php echo ++$i;?></td>
                                        <td>{{ $item->account_type }}</td>
                                        <td>{{ $item->country }}</td>
                                        <td>{{ $item->ifsc_code }}</td>
                                        <td>{{ $item->contact }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>{{ $item->account_number }}</td>
                                        <td>
                                            <a href="{{ url('/onbording/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/onbording/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/onbording' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach 
