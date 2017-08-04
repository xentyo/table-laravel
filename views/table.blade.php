<table>
  <thead>
    <tr>
      @foreach ($table->headers as $key => $header)
        <td>{!! $header !!}</td>
      @endforeach
    </tr>
  </thead>
  <tbody>
    @foreach ($table->rows() as $key => $row)
      <tr>
        @foreach ($table->columns() as $key => $column)
          <td>{!! $row->getValue($column->name()) !!}</td>
        @endforeach
      </tr>
    @endforeach
  </tbody>
</table>