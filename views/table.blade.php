<table{!!$table->props()!!}>
  <thead>
    <tr>
      @foreach ($table->headers() as $key => $header)
        <td>{!! $header !!}</td>
      @endforeach
    </tr>
  </thead>
  <tbody>
    @foreach ($table->rows() as $key => $row)
      <tr{!! $row->props() !!}>
        @foreach ($table->columns() as $key => $column)
          <td id="{{$column->property()}}">{!! $row->getValue($column->property()) !!}</td>
        @endforeach
      </tr>
    @endforeach
  </tbody>
</table>
